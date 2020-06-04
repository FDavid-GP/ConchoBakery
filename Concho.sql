create database concho;

use concho

create table User(
Correo char(100),
Nombre char(100),
ApellidoP char(50),
ApellidoM char(50),
Contrasenia char(30),
Tipo int(1),
primary key (Correo)
);

create table Pan(
NombreP char(100),
Imag char(250),
precio char(10),
cantidad char(10),
primary key (NombreP)
);

create table Ingredientes(
NombreIng char(50),
Cantidad char(10),
fecha char(10),
primary key (NombreIng)
);

create table Hist_Pan_Vent(
ID_HPV int auto_increment,
NombreP char(100),
Cantidad char(10),
fecha char(10),
primary key (ID_HPV)
);

create table Hist_Pan_Hecho(
ID_HPH int auto_increment,
NombreP char(100),
Cantidad char(10),
fecha char(10),
primary key (ID_HPH)
);

create table Hist_Ing_Usado(
ID_HIU int auto_increment,
NombreIng char(100),
Cantidad char(10),
fecha char(10),
primary key (ID_HIU)
);

CREATE PROCEDURE SP_User(U_name VARCHAR(100), U_Apellido VARCHAR(50), U_ApellidoM VARCHAR(50), U_Correo VARCHAR(100), U_Contrasenia VARCHAR(30), U_Tipo VARCHAR(1))
INSERT INTO User(Nombre, ApellidoP, ApellidoM, Correo, Contrasenia, Tipo) VALUES(U_name, U_Apellido, U_ApellidoM, U_Correo, U_Contrasenia, U_Tipo);

CREATE PROCEDURE SP_Pan(p_name VARCHAR(50), p_imag VARCHAR(250), p_Cantidad VARCHAR(10), p_precio VARCHAR(10))
INSERT INTO Pan(NombreP, Imag, precio, cantidad) VALUES(p_name, p_imag, p_precio, p_Cantidad);

CREATE PROCEDURE SP_Ingrediente(I_name VARCHAR(50), I_Cantidad VARCHAR(10), I_fecha VARCHAR(10))
INSERT INTO Ingredientes(NombreIng, Cantidad, fecha) VALUES(I_name, I_Cantidad, I_fecha);


Create Procedure SP_User_Update(IN U_id VARCHAR(100), IN U_name VARCHAR(100), IN U_Apellido VARCHAR(50), IN U_ApellidoM VARCHAR(50), IN U_Correo VARCHAR(100), IN U_Contrasenia VARCHAR(30), IN U_Tipo VARCHAR(1))
UPDATE User
SET
Nombre = U_name, ApellidoP = U_Apellido, ApellidoM = U_ApellidoM, Correo = U_Correo, contrasenia = U_Contrasenia, tipo = U_Tipo
WHERE Correo = U_id;

CREATE PROCEDURE SP_Pan_Update(IN p_name VARCHAR(50), IN p_imag VARCHAR(250), IN p_Cantidad VARCHAR(10), IN p_precio VARCHAR(10))
UPDATE Pan
SET
precio = p_precio, cantidad = p_Cantidad, Imag = p_imag
WHERE NombreP = p_name;

CREATE PROCEDURE SP_Ing_Update(IN I_name VARCHAR(50), IN I_Cantidad VARCHAR(10), IN I_fecha VARCHAR(10))
UPDATE ingredientes
SET
cantidad = I_Cantidad, fecha = I_fecha
WHERE NombreIng = I_name;


Create Procedure SP_User_Delete( IN U_Correo VARCHAR(100))
DELETE FROM User
WHERE Correo=U_Correo;

Create Procedure SP_Pan_Delete( IN p_name VARCHAR(50))
DELETE FROM Pan
WHERE NombreP=p_name;

Create Procedure SP_Ing_Delete( IN I_name VARCHAR(50))
DELETE FROM Ingredientes
WHERE NombreIng=I_name;

call SP_User("root","root","root","root@root.com","root",1);