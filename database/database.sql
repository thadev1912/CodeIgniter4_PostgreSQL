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

--
-- Data for Name: lophoc; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.lophoc (id, ma_lop, ten_lop) FROM stdin;
1	CTH10	Công Nghệ Thông Tin Khóa 10
2	CTH11	Công Nghệ Thông Tin Khóa 11
5	CTH12	Công Nghệ Thông Tin Khóa 12
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, version, class, "group", namespace, "time", batch) FROM stdin;
1	2023-05-15-031547	App\\Database\\Migrations\\CreateTableSinhvien	default	App	1684123207	1
2	2023-05-15-085330	App\\Database\\Migrations\\CreateTableLophoc	default	App	1684140929	2
\.


--
-- Data for Name: sinhvien; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sinhvien (id, ma_sv, ten_sv, ghichu, gioitinh, ma_lop, diachi, sdt) FROM stdin;
1	SV01	Thạch Chanh Tha	Ưu tiên 1	Nam	CTH10	Ninh Kiều-Cần Thơ	0908 346 989
7	777	77	777	777	777	777	777
2	SV02	Hà Mộng Trinh	Ưu tiên 2	Nữ	CTH11	Cái Răng-Cần Thơ	038 7761 566
10	SV03	Nguyễn Minh Trí	Ưu tiên 3	Nam	CTH12	Bình Thủy-Cần Thơ	0847 999 999
14	999	999	999	999	999	999	999
15	SV04	Hà Mỹ Lợi	Ưu tiên 4	Nữ	CTH11	Cờ Đỏ-Cần Thơ	0718 18741 188
\.


--
-- Name: lophoc_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.lophoc_id_seq', 6, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 2, true);


--
-- Name: sinhvien_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sinhvien_id_seq', 15, true);


--
-- PostgreSQL database dump complete
--

