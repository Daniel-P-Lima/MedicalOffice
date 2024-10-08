CREATE DATABASE consultorio_medico;

CREATE TABLE usuario(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(200) NOT NULL,
	sexo CHAR(20) NOT NULL
);


INSERT INTO usuario (nome, email, senha, sexo) VALUES 
('Alice Silva', 'alice.silva@example.com', '8bdba7469ff7212ed31b153b539a6cb8415603e052e480fd50788232a1234bdc', 'Feminino'),
('Bruno Souza', 'bruno.souza@example.com', '576cfe03d0517bcb75604c744ff2cf2f1fdd41aea36a35b0c0a1fffe44e18c63', 'Masculino'),
('Carlos Pereira', 'carlos.pereira@example.com', '9e571affb71c2dd97d8bc637a79509408c72787a0dba904095379b4019dcb06f', 'Masculino'),
('Diana Costa', 'diana.costa@example.com', '8fdadf64896913ff9dbea22fd485440e0a7012a72d8f88e3fcfcce8fff0032c8', 'Feminino'),
('Eduardo Lima', 'eduardo.lima@example.com', '9c76cde73e5ba359f4355dd5278f85a2041021c9b9f586e5326e11b1c6b28e58', 'Masculino'),
('Fernanda Oliveira', 'fernanda.oliveira@example.com', '64190f805426472eec34f6acd1ca14c14622d94acd339d4d553eccc082574e65', 'Feminino'),
('Gabriel Almeida', 'gabriel.almeida@example.com', 'eea1f4034e992647debf61cf2580cc0a300a14ed57b26c14b7005fd3ef76fd77', 'Outro'),
('Helena Rocha', 'helena.rocha@example.com', '1b786e94e376f13062ba632dab57173fc29ed3123e1bbe3162b29fcd099d3140', 'Feminino'),
('Igor Martins', 'igor.martins@example.com', 'deea5e0bb1e9099f0f2c8cacd73fee15697a3008630fa13ef426e41e8aae26dd', 'Outro'),
('Julia Santos', 'julia.santos@example.com', '7623b67b7539ed06719aa26353cf95f3f92ffd1ad5a33bc6f88c09b3d80734ca', 'Feminino');


CREATE TABLE medicos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	cro VARCHAR(20) NOT NULL,
	disponivel BOOLEAN NOT NULL
);


INSERT INTO medicos (nome, cro, disponivel) VALUES 
('Dr. Pedro Paulo', '39485712093874', 1),
('Dra. Livia Sales', '58721364829517', 0),
('Dra. Ana Luiza', '19283746502814', 0),
('Dr. Carlos Eduardo', '48392018475629', 1),
('Dra. Mariana Silva', '75649382014578', 1),
('Dr. Felipe Santos', '10293847561904', 0),
('Dra. Julia Pereira', '56473829104836', 1),
('Dra. Beatriz Costa', '38475619283745', 0),
('Dr. Rafael Oliveira', '75692038471628', 1),
('Dra. Tatiane Martins', '12093847561239', 0);


CREATE TABLE consultas(
	id_consulta INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	data_consulta DATE NOT NULL,
	fk_key_paciente INT NOT NULL,
	fk_key_medico INT NOT NULL,
	FOREIGN KEY (fk_key_paciente) REFERENCES usuario(id),
	FOREIGN KEY (fk_key_medico) REFERENCES medicos(id)
	
);

CREATE TABLE administradores(
	id_adminstrador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(200) NOT NULL
);

INSERT INTO administradores (nome, email, senha) VALUES 
('Daniel Lima', 'daniel@adm.com', '12345'),
('Livia Sales', 'livia@adm.com', '12345'),
('Aderbal Junior', 'aderbal@adm.com', '09876');
