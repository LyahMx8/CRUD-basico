CREATE DATABASE ventas_aaa;
USE ventas_aaa;

CREATE TABLE empleado (
	id int auto_increment PRIMARY KEY,
	cod_emp varchar(255) not null,
	nombre varchar(40) not null,
	apellido varchar(40) not null,
	celular bigint(11) not null,
	direccion varchar(60) not null
);
insert into empleado values(1,'AA1','MARIA','MESA',3112587412,'av siempreviva #4-2 sidney');
insert into empleado values(2,'AA2','JUAN','AMAYA',3105147895,'av CARACAS #20-34');
insert into empleado values(3,'AA3','PEDRO','MARIN',3112705060,'CLL 15 CRA 30');
insert into empleado values(4,'AA4','PAOLA','QUINTERO',3219805060,'CRR 1 #5-30');

CREATE TABLE contrato (
	cod_contrato bigint not null auto_increment PRIMARY KEY,
	fecha_contrato date not null,
	fecha_i date not null,
	fecha_f date not null,
	fecha_termino date null,
	fk_tipo_contrato int not null,
	fk_cargo int not null,
	fk_cod_empleado int not null,
	estado varchar(30) not null,
	salario bigint not null,
	observacion varchar(30) null
);

ALTER TABLE contrato ADD
CONSTRAINT fk_cont_empleado foreign key(fk_cod_empleado)
REFERENCES empleado (id);