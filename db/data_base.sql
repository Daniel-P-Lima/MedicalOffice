USE clinica_medica;

CREATE TABLE clinicas_medicas (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_fantasia VARCHAR(50) NOT NULL,
	cnpj MEDIUMINT(14) UNSIGNED NOT NULL,
	telefone VARCHAR(20) NOT NULL,
	endereco VARCHAR(20) NOT NULL
);

CREATE TABLE usuarios (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(20) NOT NULL,
	senha VARCHAR(200) NOT NULL, 
	tipo_usuario VARCHAR(20) NOT NULL,
	ativo BOOLEAN DEFAULT 0
);

CREATE TABLE medicos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	crm VARCHAR(20) NOT NULL,
	nome VARCHAR(100) NOT NULL,
	disponivel BOOLEAN DEFAULT 1,
	fk_usuario INT NOT NULL,
	FOREIGN KEY (fk_usuario) REFERENCES usuarios(id)
);

CREATE TABLE pacientes (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	sexo VARCHAR(20) NOT NULL,
	tipo_sanguineo CHAR(4) NOT NULL,
	telefone VARCHAR(20) NOT NULL,
	estado_civil VARCHAR(30) NOT NULL,
	fk_usuario INT NOT NULL,
	FOREIGN KEY (fk_usuario) REFERENCES usuarios(id)
);


CREATE TABLE consultorios (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	andar INT(20) NOT NULL,
	disponivel BOOLEAN DEFAULT 0,
	fk_clinica_medica INT NOT NULL,
	FOREIGN KEY (fk_clinica_medica) REFERENCES clinicas_medicas (id)
);

CREATE TABLE consultas (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	data_consulta DATE NOT NULL,
	hora_consulta TIME NOT NULL,
	fk_paciente INT NOT NULL,
	fk_consultorio INT NOT NULL,
	FOREIGN KEY (fk_paciente) REFERENCES pacientes(id),
	FOREIGN KEY (fk_consultorio) REFERENCES consultorios(id)
);

CREATE TABLE agendas_medicas (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fk_clinica_medica INT NOT NULL,
	fk_consulta INT NOT NULL,
	fk_medico INT NOT NULL,
	FOREIGN KEY (fk_medico) REFERENCES medicos(id),
	FOREIGN KEY (fk_consulta) REFERENCES consultas(id),
	FOREIGN KEY (fk_clinica_medica) REFERENCES clinicas_medicas (id)
);

