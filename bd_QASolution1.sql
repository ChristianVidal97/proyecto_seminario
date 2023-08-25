--
-- PostgreSQL database dump
--

-- Dumped from database version 10.16
-- Dumped by pg_dump version 14.1

-- Started on 2022-08-22 10:14:27

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

--
-- TOC entry 198 (class 1259 OID 43055)
-- Name: datos_administrativos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.datos_administrativos (
    cod_admin character(10) NOT NULL,
    nom_admin character varying(30),
    ape_admin character varying(30),
    cargo_admin character varying(30),
    correo_admin character varying(30),
    passw_admin character(10)
);


ALTER TABLE public.datos_administrativos OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 43050)
-- Name: datos_docentes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.datos_docentes (
    cod_docente character(10) NOT NULL,
    nom_docente character varying(30),
    ape_docente character varying(30),
    nom_facultad character varying(30),
    correo_docente character varying(30)
);


ALTER TABLE public.datos_docentes OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 43045)
-- Name: datos_estudiantes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.datos_estudiantes (
    cod_estudiante character(10) NOT NULL,
    nom_estudiante character varying(30),
    ape_estudiante character varying(30),
    prog_pregrado character varying(30),
    nom_facultad character varying(30),
    correo_estudiante character varying(30)
);


ALTER TABLE public.datos_estudiantes OWNER TO postgres;

--
-- TOC entry 2805 (class 0 OID 43055)
-- Dependencies: 198
-- Data for Name: datos_administrativos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.datos_administrativos (cod_admin, nom_admin, ape_admin, cargo_admin, correo_admin, passw_admin) FROM stdin;
\.


--
-- TOC entry 2804 (class 0 OID 43050)
-- Dependencies: 197
-- Data for Name: datos_docentes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.datos_docentes (cod_docente, nom_docente, ape_docente, nom_facultad, correo_docente) FROM stdin;
\.


--
-- TOC entry 2803 (class 0 OID 43045)
-- Dependencies: 196
-- Data for Name: datos_estudiantes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.datos_estudiantes (cod_estudiante, nom_estudiante, ape_estudiante, prog_pregrado, nom_facultad, correo_estudiante) FROM stdin;
\.


--
-- TOC entry 2681 (class 2606 OID 43059)
-- Name: datos_administrativos datos_administrativos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.datos_administrativos
    ADD CONSTRAINT datos_administrativos_pkey PRIMARY KEY (cod_admin);


--
-- TOC entry 2679 (class 2606 OID 43054)
-- Name: datos_docentes datos_docentes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.datos_docentes
    ADD CONSTRAINT datos_docentes_pkey PRIMARY KEY (cod_docente);


--
-- TOC entry 2677 (class 2606 OID 43049)
-- Name: datos_estudiantes datos_estudiantes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.datos_estudiantes
    ADD CONSTRAINT datos_estudiantes_pkey PRIMARY KEY (cod_estudiante);


-- Completed on 2022-08-22 10:14:27

--
-- PostgreSQL database dump complete
--

