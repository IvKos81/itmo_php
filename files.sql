PGDMP  7                    }            music_store    16.1    17.2     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                           false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                           false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                           false            �           1262    16438    music_store    DATABASE     m   CREATE DATABASE music_store WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'C';
    DROP DATABASE music_store;
                     postgres    false            �            1259    16521    files    TABLE     �   CREATE TABLE public.files (
    id integer NOT NULL,
    file_name character varying(255) NOT NULL,
    download_link text NOT NULL,
    uploaded_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
    DROP TABLE public.files;
       public         heap r       postgres    false            �            1259    16520    files_id_seq    SEQUENCE     �   CREATE SEQUENCE public.files_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.files_id_seq;
       public               postgres    false    230            �           0    0    files_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.files_id_seq OWNED BY public.files.id;
          public               postgres    false    229            5           2604    16524    files id    DEFAULT     d   ALTER TABLE ONLY public.files ALTER COLUMN id SET DEFAULT nextval('public.files_id_seq'::regclass);
 7   ALTER TABLE public.files ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    230    229    230            �          0    16521    files 
   TABLE DATA           J   COPY public.files (id, file_name, download_link, uploaded_at) FROM stdin;
    public               postgres    false    230   �
       �           0    0    files_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.files_id_seq', 53, true);
          public               postgres    false    229            8           2606    16529    files files_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.files
    ADD CONSTRAINT files_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.files DROP CONSTRAINT files_pkey;
       public                 postgres    false    230            �   �  x��S�n� ]�W��`6�nm7�d%�f�3F	�mF`O�~}q7���I�A��=G!+ȶ34��-h��X�,�/ѻ��y�ƻ[Ȓ�����5l#�F֔KU�XH�޷�)��D=zf��hM�k�[�?��c^PΔ��
1N�C;ó�:g�臤r��F��;й��JkV(,j�����Oa��;}�O�M�Y�w�s?Ey���T�I�s/�3-|��M�L�.M=
�����}R\{�+5D)x!+��F�"{Mp>\}0�J�эИ9�}�{IZ�Zs�%C�&����v6�e�&]��4�:�G8~sq��Ƽ��`��hZVZ*�e��"
�S��[��`Z��T�/9�z�b,K�49�εKQ;ӟ����o r݊�B�T#G�M:���u���Ƭ�uZ�d�B1�??�:4     