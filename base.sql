create database conge;
CREATE TABLE `conge`.`personne` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  `prenom` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `date_embauche` DATE NOT NULL,
  `date_debauche` DATE NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `conge`.`type_conge` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  `deductible` INT NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `conge`.`jour_ferie` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Dupont', 'Jean', 'jean.dupont@gmail.com', '2022-01-01', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Rabe', 'Koto', 'jean.dupont@gmail.com', '2022-01-01', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Rasoa', 'Faniry', 'jean.dupont@gmail.com', '2022-02-04', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Titan', 'Rabe', 'jean.dupont@gmail.com', '2022-05-017', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Valie', 'Paul', 'jean.dupont@gmail.com', '2022-01-06', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Nomena', 'Jin', 'jean.dupont@gmail.com', '2022-04-12', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Jack', 'Tina', 'jean.dupont@gmail.com', '2022-11-010', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Boum', 'Maurice', 'jean.dupont@gmail.com', '2023-04-11', NULL);
INSERT INTO `conge`.`personne` (`nom`, `prenom`, `email`, `date_embauche`, `date_debauche`)VALUES ('Marie', 'Pola', 'jean.dupont@gmail.com', '2024-08-13', NULL);

INSERT INTO `conge`.`type_conge` (`label`, `deductible`)
VALUES
  ('Congé annuel', 1),
  ('Congé maladie', 0),
  ('Congé maternité', 0),
  ('Congé paternité', 0),
  ('Congé sans solde', 1);

INSERT INTO `conge`.`jour_ferie` (`date`, `description`)
VALUES
  ('2024-01-01', 'Nouvel An'),
  ('2024-04-01', 'Lundi de Pâques'),
  ('2024-05-01', 'Fête du Travail'),
  ('2024-05-08', 'Victoire 1945'),
  ('2024-07-14', 'Fête Nationale'),
  ('2024-08-15', 'Assomption'),
  ('2024-11-01', 'Toussaint'),
  ('2024-11-11', 'Armistice 1918'),
  ('2024-12-25', 'Noël');


CREATE TABLE `conge`.`demandes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_type_conge` INT NOT NULL COMMENT 'le type de conge',
  `id_personne` INT NOT NULL,
  `debut_conge` DATE NOT NULL,
  `fin_conge` DATE NOT NULL,
  `commentaire` LONGTEXT NULL,
  `date_creation` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id`));
