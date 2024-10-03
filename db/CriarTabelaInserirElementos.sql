CREATE TABLE usuario(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(200) NOT NULL,
	sexo CHAR(20) NOT NULL
);

INSERT INTO usuario (nome, email, senha, sexo) VALUES 
('Alice Silva', 'alice.silva@example.com', 'd1c4b9f3d1d58c3e9f3b9f0a5e8c7d6f9b8a6d5e4c3b2a1f0e9d8c7b6a5d4c3b', 'Feminino'),
('Bruno Souza', 'bruno.souza@example.com', 'e2f5a7c9d1b3e4f6a8c0d2e4f6a8c0d2e4f6a8c0d2e4f6a8c0d2e4f6a8c0d2e', 'Masculino'),
('Carlos Pereira', 'carlos.pereira@example.com', 'f3a6c8e0d2f4a6c8e0d2f4a6c8e0d2f4a6c8e0d2f4a6c8e0d2f4a6c8e0d2f4a', 'Masculino'),
('Diana Costa', 'diana.costa@example.com', 'a4b7d9f1b3d5f7a9c1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a', 'Feminino'),
('Eduardo Lima', 'eduardo.lima@example.com', 'b5c8eaf2c4e6f8b0d2e4f6b8d0e2f4b6d8e0f2b4d6f8b0d2e4f6b8d0e2f4b6d', 'Masculino'),
('Fernanda Oliveira', 'fernanda.oliveira@example.com', 'c6d9f1b3d5f7a9c1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c', 'Feminino'),
('Gabriel Almeida', 'gabriel.almeida@example.com', 'd7eaf3c5e7f9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b', 'Outro'),
('Helena Rocha', 'helena.rocha@example.com', 'e8fb04d6f8b0d2e4f6b8d0e2f4b6d8e0f2b4d6f8b0d2e4f6b8d0e2f4b6d8e0f', 'Feminino'),
('Igor Martins', 'igor.martins@example.com', 'f90c15e7f9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d3f5a7c9b1d', 'Outro'),
('Julia Santos', 'julia.santos@example.com', 'a1bd26f8b2d4f6b8d0e2f4b6d8e0f2b4d6f8b0d2e4f6b8d0e2f4b6d8e0f2b4d', 'Feminino');

DROP TABLE usuario;

CREATE TABLE medicos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	cro VARCHAR(20) NOT NULL,
	disponivel BOOLEAN NOT NULL
);

INSERT INTO medicos (nome, cro, disponivel) VALUES
("Dr. José Paulo", "123123", 1),
("Dra. Marcela Oliveira", "123124", 1),
("Dra. Paula Lucas", "123125", 0),
("Dr. João Pedro", "123126", 1),
("Dr. Naldo Moura", "123128", 0);

CREATE TABLE consultas(
	id_consulta INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	data_consulta DATE NOT NULL,
	fk_key_paciente INT NOT NULL,
	fk_key_medico INT NOT NULL,
	FOREIGN KEY (fk_key_paciente) REFERENCES usuario(id),
	FOREIGN KEY (fk_key_medico) REFERENCES medicos(id)
	
);
