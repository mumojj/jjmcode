-- Table: pol_tuk_research_grant

-- DROP TABLE pol_tuk_research_grant;

CREATE TABLE pol_tuk_research_grant
(
  id serial NOT NULL,
  project_name character varying(100) NOT NULL,
  project_code character varying(100) NOT NULL,
  project_financier character varying(100) NOT NULL,
  patner_institution character varying(100) NOT NULL,
  project_coodinator character varying(100) NOT NULL,
  institution_coordinator character varying(100) NOT NULL,
  program_year character varying(100) NOT NULL,
  period character varying(100) NOT NULL,
  account_number character varying(100) NOT NULL,
  currency_disbursed character varying(100) NOT NULL,
  revenue_id integer,
  expenditure_id integer,
  CONSTRAINT pol_tuk_research_grant_pkey PRIMARY KEY (project_code)
)
WITH (
  OIDS=FALSE
);

-- Table: pol_tuk_research_grant_revenue

-- DROP TABLE pol_tuk_research_grant_revenue;

CREATE TABLE pol_tuk_research_grant_revenue
(
  id serial NOT NULL,
  project_code character varying(100),
  source character varying(100) NOT NULL,
  amount character varying(100) NOT NULL,
  date character varying(30),
  currency character varying(30),
  CONSTRAINT pol_tuk_research_grant_revenue_pkey PRIMARY KEY (id),
  CONSTRAINT fk_revenue_project_code FOREIGN KEY (project_code)
      REFERENCES pol_tuk_research_grant (project_code) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);


-- Table: pol_tuk_research_grant_expenditure

-- DROP TABLE pol_tuk_research_grant_expenditure;

CREATE TABLE pol_tuk_research_grant_expenditure
(
  id serial NOT NULL,
  project_code character varying(100) NOT NULL,
  expenditure_description character varying(225) NOT NULL,
  amount character varying(100) NOT NULL,
  date character varying(30),
  currency character varying(30),
  grant_id integer,
  CONSTRAINT pol_tuk_research_grant_expenditure_pkey PRIMARY KEY (id),
  CONSTRAINT fk_expenditure_project_code FOREIGN KEY (project_code)
      REFERENCES pol_tuk_research_grant (project_code) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);


-- Table: pol_tuk_research_grant_balance

-- DROP TABLE pol_tuk_research_grant_balance;

CREATE TABLE pol_tuk_research_grant_balance
(
  id serial NOT NULL,
  project_code character varying(100) NOT NULL,
  total_revenue character varying(100),
  total_expenditure character varying(100),
  remaining_balance character varying(100),
  date character varying(30),
  revenue_id integer,
  expenditure_id integer,
  CONSTRAINT pol_tuk_research_grant_balance_pkey PRIMARY KEY (id),
  CONSTRAINT fk_project_code FOREIGN KEY (project_code)
      REFERENCES pol_tuk_research_grant (project_code) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE CASCADE
  
)
WITH (
  OIDS=FALSE
);


-- Function: update_project_code_balance()

-- DROP FUNCTION update_project_code_balance();

CREATE OR REPLACE FUNCTION update_project_code_balance()
  RETURNS trigger AS
$BODY$
BEGIN
    UPDATE pol_tuk_research_grant_balance
    SET project_code = NEW.project_code
    WHERE project_code = OLD.project_code;

    RETURN NEW;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;


-- Trigger: update_project_code_trigger2 on pol_tuk_research_grant

-- DROP TRIGGER update_project_code_trigger2 ON pol_tuk_research_grant;

CREATE TRIGGER update_project_code_trigger2
  AFTER UPDATE OF project_code
  ON pol_tuk_research_grant
  FOR EACH ROW
  EXECUTE PROCEDURE update_project_code_balance();
  


-- Function: update_balance()

-- DROP FUNCTION update_balance();

CREATE OR REPLACE FUNCTION update_balance()
  RETURNS trigger AS
$BODY$
BEGIN
    -- Calculate total revenue for the project code
    UPDATE pol_tuk_research_grant_balance
    SET total_revenue = (SELECT SUM(amount::numeric) FROM pol_tuk_research_grant_revenue WHERE project_code = NEW.project_code)
    WHERE project_code = NEW.project_code;

    -- Calculate total expenditure for the project code
    UPDATE pol_tuk_research_grant_balance
    SET total_expenditure = (SELECT SUM(amount::numeric) FROM pol_tuk_research_grant_expenditure WHERE project_code = NEW.project_code)
    WHERE project_code = NEW.project_code;

    -- Calculate remaining balance
    UPDATE pol_tuk_research_grant_balance
    SET remaining_balance = total_revenue::numeric - total_expenditure::numeric
    WHERE project_code = NEW.project_code;

    RETURN NEW;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;


-- Trigger: update_balance_trigger on pol_tuk_research_grant_revenue

-- DROP TRIGGER update_balance_trigger ON pol_tuk_research_grant_revenue;

CREATE TRIGGER update_balance_trigger
  AFTER INSERT OR UPDATE
  ON pol_tuk_research_grant_revenue
  FOR EACH ROW
  EXECUTE PROCEDURE update_balance();

-- Trigger: update_balance_expenditure_trigger on pol_tuk_research_grant_expenditure
-- DROP TRIGGER update_balance_expenditure_trigger ON pol_tuk_research_grant_expenditure;
CREATE TRIGGER update_balance_expenditure_trigger
  AFTER INSERT OR UPDATE
  ON pol_tuk_research_grant_expenditure
  FOR EACH ROW
  EXECUTE PROCEDURE update_balance();