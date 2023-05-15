--
-- PostgreSQL database dump
--

-- Dumped from database version 15.2
-- Dumped by pg_dump version 15.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: lophoc; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.lophoc (
    id integer NOT NULL,
    ma_lop character varying(100) NOT NULL,
    ten_lop character varying(100) NOT NULL
);


ALTER TABLE public.lophoc OWNER TO postgres;

--
-- Name: lophoc_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.lophoc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.lophoc_id_seq OWNER TO postgres;

--
-- Name: lophoc_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.lophoc_id_seq OWNED BY public.lophoc.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id bigint NOT NULL,
    version character varying(255) NOT NULL,
    class character varying(255) NOT NULL,
    "group" character varying(255) NOT NULL,
    namespace character varying(255) NOT NULL,
    "time" integer NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: sinhvien; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sinhvien (
    id integer NOT NULL,
    ma_sv character varying(100) NOT NULL,
    ten_sv character varying(100) NOT NULL,
    ghichu text,
    gioitinh character varying(100),
    ma_lop character varying(100),
    diachi character varying(100),
    sdt character varying(100)
);


ALTER TABLE public.sinhvien OWNER TO postgres;

--
-- Name: sinhvien_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sinhvien_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sinhvien_id_seq OWNER TO postgres;

--
-- Name: sinhvien_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sinhvien_id_seq OWNED BY public.sinhvien.id;


--
-- Name: lophoc id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.lophoc ALTER COLUMN id SET DEFAULT nextval('public.lophoc_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: sinhvien id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sinhvien ALTER COLUMN id SET DEFAULT nextval('public.sinhvien_id_seq'::regclass);


--
-- Name: lophoc pk_lophoc; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.lophoc
    ADD CONSTRAINT pk_lophoc PRIMARY KEY (id);


--
-- Name: migrations pk_migrations; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT pk_migrations PRIMARY KEY (id);


--
-- Name: sinhvien pk_sinhvien; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sinhvien
    ADD CONSTRAINT pk_sinhvien PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

