--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.3
-- Dumped by pg_dump version 9.6.3

-- Started on 2017-07-05 22:54:31

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'WIN1252';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE "SAC2";
--
-- TOC entry 2156 (class 1262 OID 16531)
-- Name: SAC2; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE "SAC2" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';


ALTER DATABASE "SAC2" OWNER TO postgres;

\connect "SAC2"

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'WIN1252';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12387)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2159 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 190 (class 1259 OID 16559)
-- Name: chamado; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE chamado (
    id integer NOT NULL,
    titulo character varying(255) DEFAULT NULL::character varying,
    observacao text,
    data_abertura timestamp(0) without time zone,
    cliente_id integer,
    pedido_id integer
);


ALTER TABLE chamado OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 16557)
-- Name: chamado_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE chamado_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE chamado_id_seq OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 16534)
-- Name: cliente; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE cliente (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    endereco character varying(255) NOT NULL,
    cidade character varying(125) NOT NULL,
    estado character varying(25) NOT NULL,
    email character varying(255) NOT NULL
);


ALTER TABLE cliente OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 16532)
-- Name: cliente_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cliente_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cliente_id_seq OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 16544)
-- Name: pedido; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE pedido (
    id integer NOT NULL,
    cliente_id integer,
    desc_pedio character varying(255) DEFAULT NULL::character varying,
    qtd_pedido integer,
    valor_pedido integer
);


ALTER TABLE pedido OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 16542)
-- Name: pedido_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pedido_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE pedido_id_seq OWNER TO postgres;

--
-- TOC entry 2151 (class 0 OID 16559)
-- Dependencies: 190
-- Data for Name: chamado; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (57, 'problemas no notebook', 'notebook trava, demora para iniciar e está muito lento', '2017-07-02 07:24:41', 6, 3);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (59, 'problemas', 'armário veio com defeito na gaveta', '2017-07-04 01:34:01', 8, 4);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (58, 'tv queimou', 'A tv adquirida nas lojas americanas queimou. Exijo troca', '2017-07-02 07:33:46', 7, 2);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (60, 'Colchão com problemas na costura', 'TESTES TESTESTESTES TESTESTESTES TESTES', '2017-07-04 02:28:24', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (62, 'Celular com problema', 'A tela do celular está com problemas de nitidez', '2017-07-04 03:29:21', 11, 7);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (63, 'Relógio com defeito', 'Relógio está com a pulseira quebrada', '2017-07-04 03:32:04', 12, 8);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (64, 'Telefone com problem', 'Telefone sem fio está com volume muito baixo', '2017-07-04 03:35:00', 13, 9);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (65, 'Mochila danificada', 'A mochila veio com problemas na costura', '2017-07-04 03:37:02', 14, 10);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (66, 'Mais problemas no notebook', 'O teclado não funciona e as entradas USB também não.', '2017-07-05 03:45:58', 6, 3);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (67, 'TV com imagem em preto e branco', 'A tv está com outro problema: agora as imagens estão em preto e branco.', '2017-07-05 03:51:15', 7, 2);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (68, 'Armário com defeitos', 'O armário apresenta rachaduras na parte de trás.', '2017-07-05 04:03:26', 8, 4);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (69, 'notebook com problemas', 'O notebook está com problemas nas dobradiças do monitor', '2017-07-05 04:14:42', 6, 3);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (70, 'Mais problemas no notebook', 'O notebook bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla', '2017-07-05 04:19:50', 6, 3);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (71, 'notebook com problemas v4', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla', '2017-07-05 04:23:42', 6, 3);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (72, 'notebook com problemas v5', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla', '2017-07-05 04:25:45', 6, 3);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (73, 'Armário com defeitos v2', 'The work remained unsurpassed until the thirteenth century and was regarded as the summit of all knowledge. It became an essential part of European medieval culture. Soon after the invention of typography it appeared many times in print.', '2017-07-05 18:02:40', 8, 4);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (74, 'Armário com defeitos v3', 'The new version, Linux Mint 18.2, is the latest update in the 18.x series and is built upon a base of Ubuntu 16.04 LTS. The new release will be supported until 2021 and is available in four editions (Cinnamon, KDE, MATE and Xfce).', '2017-07-05 18:04:44', 8, 4);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (75, 'Colchão com defeito', 'A content provider component supplies data from one application to others on request. Such requests are handled by the methods of the ContentResolver class. A content provider can use different ways to store its data and the data can be stored in a database, in files, or even over a network.', '2017-07-05 18:15:43', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (76, 'asdfafa', 'asdfasfaaaA content provider component supplies data from one application to others on request. Such requests are handled by the methods of the ContentResolver class. A content provider can use different ways to store its data and the data can be stored in a database, in files, or even over a network.', '2017-07-05 19:37:32', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (77, 'asdfafa', 'asdfasfaaaA content provider component supplies data from one application to others on request. Such requests are handled by the methods of the ContentResolver class. A content provider can use different ways to store its data and the data can be stored in a database, in files, or even over a network.', '2017-07-05 19:38:29', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (56, 'defeito no teclado', 'observações - defeito no teclado', '2017-07-02 07:01:19', 5, 1);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (61, 'Forno não funciona', 'O fogão Brastemp veio com um defeito no forno.', '2017-07-04 03:22:36', 10, 6);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (86, 'Colchão com defeito v4', 'bbbbbbbbbbbbbbbbbbbb ffffffffffffffff  eeeeeeeeee bbbbbbbbbbbbbbbbbb', '2017-07-05 20:14:51', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (93, 'Colchão com defeito v6', 'bbbbbbbbbbbbbbbbbbbb ffffffffffffffff  eeeeeeeeee bbbbbbbbbbbbbbbbbb', '2017-07-05 20:45:39', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (94, 'Colchão com defeito v63', 'asdfffffffffffffffffffffffff bbbbbbbbbbb', '2017-07-05 20:48:19', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (95, 'Colchão com defeito v63', 'asdfffffffffffffffffffffffff bbbbbbbbbbb', '2017-07-05 20:50:32', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (99, 'Colchão com defeito v63', 'asdfffffffffffdffffff bbbbbbbbbbb', '2017-07-05 21:04:46', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (101, 'Colchão com defeito v63', 'asdfffffffffffdffffff bbbbbbbbbbb', '2017-07-05 21:11:41', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (113, 'Colchão com defeito de novo', 'asdfffffffffffdffffff bbfdss', '2017-07-05 21:39:57', 9, 5);
INSERT INTO chamado (id, titulo, observacao, data_abertura, cliente_id, pedido_id) VALUES (112, 'fdasfjaklfjaljçl fasdfjçalç', 'djsalfjlafçjaljflas', '2017-07-05 21:37:25', 9, 5);


--
-- TOC entry 2160 (class 0 OID 0)
-- Dependencies: 189
-- Name: chamado_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('chamado_id_seq', 113, true);


--
-- TOC entry 2147 (class 0 OID 16534)
-- Dependencies: 186
-- Data for Name: cliente; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (5, 'Rui Carlos da Silva', 'Rua Direita, 3233', 'São Paulo', 'SP', 'ruibaasa@abcde.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (6, 'Carlos oliveira', 'Rua Direita, 333', 'São Paulo', 'SP', 'carlosa@abcde.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (7, 'Luiz da Silva', 'Rua Rio Verde, 566', 'São Paulo', 'SP', 'luiz@abcde.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (8, 'Eugenia Pereira', 'Rua Silva, 534', 'São Paulo', 'SP', 'eugenia@abcde.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (10, 'Flavio Silveira', 'Rua Samambaia, 544', 'São Paulo', 'SP', 'flavio.silveira@terra.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (11, 'Osmar Ribeiro', 'Rua Margarida, 443', 'São Paulo', 'SP', 'osmar@plandesk.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (12, 'André Figueira', 'Avenida Pereira Barreto, 678', 'São Paulo', 'SP', 'andre.figueira@fmail.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (13, 'Elisa Marcondes', 'Avenida dos Autonomistas, 897', 'São Paulo', 'SP', 'elisam@abcdefg.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (14, 'Gilberto Moreira', 'Rua Roque Martins, 544', 'São Paulo', 'SP', 'gilberto.moreira@pmail.com');
INSERT INTO cliente (id, nome, endereco, cidade, estado, email) VALUES (9, 'Isabel Alencar', 'Rua Caetés, 67', 'São Paulo', 'SP', 'isable@abcde.com');


--
-- TOC entry 2161 (class 0 OID 0)
-- Dependencies: 185
-- Name: cliente_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cliente_id_seq', 7, true);


--
-- TOC entry 2149 (class 0 OID 16544)
-- Dependencies: 188
-- Data for Name: pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (1, 5, 'Teclado', 3, 19);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (4, 8, 'Armário de Cozinha', 1, 700);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (5, 9, 'Colchão de molas', 2, 600);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (6, 10, 'Fogão de Seis Bocas Brastemp', 1, 750);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (7, 11, 'Smartphone LG tela 6 polegadas', 1, 820);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (8, 12, 'Relogio Digital Casio', 1, 210);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (9, 13, 'Telefone Digital sem fio Motorola', 2, 190);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (10, 14, 'Mochila para notebook Atlantis', 1, 95);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (3, 6, 'Notebook 14 polegadas Samsung', 1, 950);
INSERT INTO pedido (id, cliente_id, desc_pedio, qtd_pedido, valor_pedido) VALUES (2, 7, 'TV', 3, 35);


--
-- TOC entry 2162 (class 0 OID 0)
-- Dependencies: 187
-- Name: pedido_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pedido_id_seq', 2, true);


--
-- TOC entry 2023 (class 2606 OID 16568)
-- Name: chamado chamado_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY chamado
    ADD CONSTRAINT chamado_pkey PRIMARY KEY (id);


--
-- TOC entry 2018 (class 2606 OID 16541)
-- Name: cliente cliente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (id);


--
-- TOC entry 2021 (class 2606 OID 16550)
-- Name: pedido pedido_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pedido
    ADD CONSTRAINT pedido_pkey PRIMARY KEY (id);


--
-- TOC entry 2024 (class 1259 OID 16580)
-- Name: idx_3b02066f4854653a; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_3b02066f4854653a ON chamado USING btree (pedido_id);


--
-- TOC entry 2025 (class 1259 OID 16574)
-- Name: idx_3b02066fde734e51; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_3b02066fde734e51 ON chamado USING btree (cliente_id);


--
-- TOC entry 2019 (class 1259 OID 16551)
-- Name: idx_c4ec16cede734e51; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_c4ec16cede734e51 ON pedido USING btree (cliente_id);


--
-- TOC entry 2028 (class 2606 OID 16575)
-- Name: chamado fk_3b02066f4854653a; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY chamado
    ADD CONSTRAINT fk_3b02066f4854653a FOREIGN KEY (pedido_id) REFERENCES pedido(id);


--
-- TOC entry 2027 (class 2606 OID 16569)
-- Name: chamado fk_3b02066fde734e51; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY chamado
    ADD CONSTRAINT fk_3b02066fde734e51 FOREIGN KEY (cliente_id) REFERENCES cliente(id);


--
-- TOC entry 2026 (class 2606 OID 16552)
-- Name: pedido fk_c4ec16cede734e51; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pedido
    ADD CONSTRAINT fk_c4ec16cede734e51 FOREIGN KEY (cliente_id) REFERENCES cliente(id);


--
-- TOC entry 2158 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-07-05 22:54:32

--
-- PostgreSQL database dump complete
--

