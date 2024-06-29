CREATE DATABASE bdAcademia;
USE bdAcademia;
 
CREATE TABLE tblogin (
    login VARCHAR(30) NOT NULL PRIMARY KEY,
    senha VARCHAR(30) NOT NULL
);
 
CREATE TABLE tbAluno (
    idAluno INT PRIMARY KEY AUTO_INCREMENT,
    nomeAluno VARCHAR(40) NOT NULL,
    cpf CHAR(15),
    endereco VARCHAR(40),
    bairro VARCHAR(40),
    cidade VARCHAR(30),
    estado CHAR(2),
    cep CHAR(9),
    telefone CHAR(14),
    celular CHAR(15),
    email VARCHAR(40) NOT NULL UNIQUE,
    peso DECIMAL(6,3),
    altura DECIMAL(3,2),
    imc DECIMAL(5,3),
    statusAluno VARCHAR(10),
    obs VARCHAR(100),
    senha VARCHAR(8) NOT NULL
);
 
CREATE TABLE tbProfessor (
    idProfessor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    telefone CHAR(14),
    celular CHAR(15),
    emailpf VARCHAR(40) NOT NULL UNIQUE,
    senhapf VARCHAR(8) NOT NULL,
    statusProfessor VARCHAR(10)
);
 
CREATE TABLE tbTurma (
    idTurma INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(30),
    horarioInicio TIME,
    horarioTermino TIME,
    idProfessor INT,
    FOREIGN KEY (idProfessor) REFERENCES tbProfessor(idProfessor),
    statusTurma VARCHAR(10)
);
 
CREATE TABLE tbMatricula (
    idMatricula INT PRIMARY KEY AUTO_INCREMENT,
    dataMatricula DATE,
    idAluno INT,
    idTurma INT,
    FOREIGN KEY (idAluno) REFERENCES tbAluno(idAluno),
    FOREIGN KEY (idTurma) REFERENCES tbTurma(idTurma),
    statusMatricula VARCHAR(10)
);
 
INSERT INTO tblogin (login, senha) VALUES ('adm', '123');
 
SELECT * FROM tbAluno;
SELECT * FROM tbLogin;
SELECT * FROM tbTurma;
SELECT * FROM tbProfessor;
SELECT * FROM tbMatricula;
 
 
-- Inserir registros na tabela tblogin
INSERT INTO tblogin (login, senha) VALUES ('adm', '123');
 
-- Inserir registros na tabela tbAluno
INSERT INTO tbAluno (nomeAluno, cpf, endereco, bairro, cidade, estado, cep, telefone, celular, email, peso, altura, imc, statusAluno, obs, senha)
VALUES ('Aluno1', '123.456.789-00', 'Rua A', 'Bairro A', 'Cidade A', 'AA', '12345-678', '(11) 1111-1111', '(11) 91111-1111', 'aluno1@email.com', 70.500, 1.75, 22.98, 'Ativo', 'Obs1', 'senha1');
 
INSERT INTO tbAluno (nomeAluno, cpf, endereco, bairro, cidade, estado, cep, telefone, celular, email, peso, altura, imc, statusAluno, obs, senha)
VALUES ('Aluno2', '234.567.890-11', 'Rua B', 'Bairro B', 'Cidade B', 'BB', '23456-789', '(22) 2222-2222', '(22) 92222-2222', 'aluno2@email.com', 65.300, 1.68, 23.12, 'Ativo', 'Obs2', 'senha2');
 
INSERT INTO tbAluno (nomeAluno, cpf, endereco, bairro, cidade, estado, cep, telefone, celular, email, peso, altura, imc, statusAluno, obs, senha)
VALUES ('Aluno3', '345.678.901-22', 'Rua C', 'Bairro C', 'Cidade C', 'CC', '34567-890', '(33) 3333-3333', '(33) 93333-3333', 'aluno3@email.com', 80.200, 1.82, 24.22, 'Ativo', 'Obs3', 'senha3');
 
-- Inserir registros na tabela tbProfessor
INSERT INTO tbProfessor (nome, telefone, celular, emailpf, senhapf, statusProfessor)
VALUES ('Professor1', '(44) 4444-4444', '(44) 94444-4444', 'professor1@email.com', 'senha1', 'Ativo');
 
INSERT INTO tbProfessor (nome, telefone, celular, emailpf, senhapf, statusProfessor)
VALUES ('Professor2', '(55) 5555-5555', '(55) 95555-5555', 'professor2@email.com', 'senha2', 'Ativo');
 
INSERT INTO tbProfessor (nome, telefone, celular, emailpf, senhapf, statusProfessor)
VALUES ('Professor3', '(66) 6666-6666', '(66) 96666-6666', 'professor3@email.com', 'senha3', 'Ativo');
 
-- Inserir registros na tabela tbTurma
INSERT INTO tbTurma (descricao, horarioInicio, horarioTermino, idProfessor, statusTurma)
VALUES ('Turma A', '08:00:00', '09:00:00', 1, 'Ativa');
 
INSERT INTO tbTurma (descricao, horarioInicio, horarioTermino, idProfessor, statusTurma)
VALUES ('Turma B', '09:00:00', '10:00:00', 2, 'Ativa');
 
INSERT INTO tbTurma (descricao, horarioInicio, horarioTermino, idProfessor, statusTurma)
VALUES ('Turma C', '10:00:00', '11:00:00', 3, 'Ativa');
 
-- Inserir registros na tabela tbMatricula
INSERT INTO tbMatricula (dataMatricula, idAluno, idTurma, statusMatricula)
VALUES ('2024-01-01', 1, 1, 'Ativa');
 
INSERT INTO tbMatricula (dataMatricula, idAluno, idTurma, statusMatricula)
VALUES ('2024-02-01', 2, 2, 'Ativa');
 
INSERT INTO tbMatricula (dataMatricula, idAluno, idTurma, statusMatricula)
VALUES ('2024-03-01', 3, 3, 'Ativa');
 
 SELECT * FROM tbAluno WHERE email = 'aluno3@email.com' AND senha = 'senha3';
 
/*PROJETO FINAL, O BANCO