DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	senha VARCHAR(100) NOT NULL,
	sexo CHAR(10) NOT NULL
);

INSERT INTO consultorio_medico.usuario (nome, email, senha, sexo)
VALUES
('Daniel', 'daniel@lima.com', '8bdba7469ff7212ed31b153b539a6cb8415603e052e480fd50788232a1234bdc', 'Feminino'),
('Júlio', 'julio@gmail.com', '576cfe03d0517bcb75604c744ff2cf2f1fdd41aea36a35b0c0a1fffe44e18c63', 'Masculino'),
('Pedro', 'pedro@gmail.com', '9e571affb71c2dd97d8bc637a79509408c72787a0dba904095379b4019dcb06f', 'Masculino'),
('Livia', 'livia@gmail.com', '8fdadf64896913ff9dbea22fd485440e0a7012a72d8f88e3fcfcce8fff0032c8', 'Feminino'),
('Bruno', 'bruno@nardoni.com', '9c76cde73e5ba359f4355dd5278f85a2041021c9b9f586e5326e11b1c6b28e58', 'Masculino'),
('Mateus', 'mateus@gmail.com', '64190f805426472eec34f6acd1ca14c14622d94acd339d4d553eccc082574e65', 'Outro'),
('Oliver', 'oliver@gmail.com', 'd402394a285101bbfe15dd66cb910aa7ca492420e1f64065727308eaa1442a85', 'Masculino');
