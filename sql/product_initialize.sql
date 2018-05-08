USE inf124;

DROP TABLE IF EXISTS products;

CREATE TABLE products (
	id int unsigned not null auto_increment,
	name varchar(50) not null,
	type varchar(50) not null,
	price varchar(7) not null,
	picture varchar(50) not null,
	image_count int not null,
	image_name varchar(30) not null,
	PRIMARY KEY (id)
);

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('MXR Dyna Comp Mini', 'Compressor' , '99.00', '../asset/item1/', 3, 'Dyna_Comp_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values 
 ('Digitech DOD 280 Compressor', 'Compressor' , '79.00', '../asset/item2/', 5, 'DOD_Comp_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('Fulltone Fulldrive 3', 'Dual Overdrive/Boost' , '139.00', '../asset/item3/', 5, 'Fulldrive3_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('Fulltone Fulldrive 2', 'Dual Stage Overdrive' , '129.00', '../asset/item4/', 3, 'Fulldrive2_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('Ibanez Tube Screamer 9', 'Overdrive' , '99.00', '../asset/item5/', 3, 'TS9_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('Ernie Ball Volume Pedal', 'Volume Pedal' , '99.00', '../asset/item6/', 4, 'EB_Volume_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('ZOOM MS50G Multistomp', 'Multistomp Pedal/Amp Modeler' , '99.00', '../asset/item7/', 2, 'ZOOM_MS_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('Boss DD-500 Delay', 'Multi-Digital Delay' ,'349.00', '../asset/item8/', 3, 'DD500_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('Boss RV-6 Reverb', 'Multi-reverb' , '129.00', '../asset/item9/', 2, 'RV6_');

INSERT INTO products (name, type, price, picture, image_count, image_name) values
 ('EHX Soul Food', 'Overdrive/Fuzz' , '99.00', '../asset/item10/', 4, 'SF_');

