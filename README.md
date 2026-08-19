# 🎓 UNIDEV — Portal do Aluno

> Sistema acadêmico em PHP e MySQL para cadastro, autenticação e visualização da área do estudante.

🔗 **Acesse o portal online:** [portalunidev.onrender.com](https://portalunidev.onrender.com)

---

## 📌 Sobre o Projeto

O **UNIDEV — Portal do Aluno** é uma aplicação web completa desenvolvida para gerenciar o fluxo de acesso estudantil[cite: 1, 6]. O sistema contempla o registro de novos alunos, a geração randômica e segura de número de matrícula única de 6 dígitos no banco de dados e a validação de credenciais (CPF e Matrícula) via *Prepared Statements*[cite: 2, 3, 6]. Uma vez autenticado, o estudante é direcionado ao painel principal contendo atalhos institucionais e a grade de disciplinas ativas[cite: 1, 6].

---

## 📸 Telas da Aplicação

| 1. Tela de Login | 2. Formulário de Cadastro | 3. Confirmação de Matrícula |
| :---: | :---: | :---: |
| <img src="./assets/inicio.jpg" width="280" /> | <img src="./assets/cadastro.jpg" width="280" /> | <img src="./assets/matricula.jpg" width="280" /> |

| 4. Autenticação Preenchida | 5. Painel do Aluno (Dashboard) |
| :---: | :---: |
| <img src="./assets/preenchido.jpg" width="380" /> | <img src="./assets/portal.png" width="380" /> |

---

## ✨ Funcionalidades

* **Cadastro de Estudantes:** Formulário para registro de Nome Social, CPF, Sexo e Data de Nascimento[cite: 3].
* **Geração Automática de Matrícula:** Algoritmo que gera dinamicamente um identificador único de 6 dígitos (`100000` a `999999`), validando contra duplicações na tabela antes de persistir[cite: 3].
* **Confirmação Visual:** Tela dedicada que exibe o número de matrícula gerado logo após o envio do formulário[cite: 2, 3].
* **Autenticação Segura:** Login validado com Matrícula e CPF utilizando consultas preparadas (`mysqli::prepare`)[cite: 6].
* **Painel do Aluno:**
  * Menu superior com atalhos para *Sistemas de provas*, *Sistemas de notas*, *Financeiro*, *Biblioteca virtual*, *Fale conosco*, *Calendário acadêmico* e *Centro de Estágios*[cite: 1].
  * Barra lateral com grade de matérias (*Programação Orientada a Objetos*, *Banco de Dados*, *Engenharia de Software*, *Programação para Dispositivos Móveis*, *Programação Web* e *Rede de Computadores*)[cite: 1].

---

## 🛠️ Tecnologias Utilizadas

* **Back-end:** PHP (com sessões e extensão nativa `mysqli`)[cite: 3, 5, 6]
* **Front-end:** HTML5 e CSS3 puro (Flexbox, gradientes, transições e efeitos hover)[cite: 1, 2, 3, 6]
* **Banco de Dados:** MySQL[cite: 3, 5]
* **Segurança:** Uso de *Prepared Statements* contra SQL Injection[cite: 3, 6] e proteção XSS com `htmlspecialchars`[cite: 2]
* **Deploy / Hospedagem:** [Render](https://render.com)

---

## 🗄️ Estrutura do Banco de Dados

Script SQL para inicialização do banco de dados `cadastro` e da tabela `alunos`[cite: 3, 5]:

```sql
CREATE DATABASE IF NOT EXISTS cadastro CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cadastro;

CREATE TABLE IF NOT EXISTS alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    sexo VARCHAR(20) NOT NULL,
    nascimento DATE NOT NULL,

👩‍💻 Autoria
Desenvolvido por Emilly Lima.

💼 LinkedIn: emilly-lima-553270237

📧 E-mail: lima7emilly12@gmail.com
    matricula VARCHAR(10) NOT NULL UNIQUE
);
