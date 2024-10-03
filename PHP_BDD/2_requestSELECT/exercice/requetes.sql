-- Création d'une table 
CREATE TABLE famille_table (id INT(11) NOT NULL AUTO_INCREMENT,
                            nom VARCHAR(255) NOT NULL, 
                            prenom VARCHAR(255) NOT NULL, 
                            statut VARCHAR(255) NOT NULL, 
                            date_naissance DATE NOT NULL,
                            PRIMARY KEY (id),
                            KEY id (id),
                            UNIQUE id_2 (id));

-- Insertion de données
INSERT INTO tests.famille_table VALUES("1", "D'Ebbing", "Roegner", "Grand-père", "1936-05-25");
INSERT INTO tests.famille_table VALUES("2", "Fiona Riannon", "Calanthe", "Grand-mère", "1938-09-11");
INSERT INTO tests.famille_table VALUES("3", "D'Erlenwald", "Duny", "Père", "1962-03-18");
INSERT INTO tests.famille_table VALUES("4", "Fiona Riannon", "Pavetta", "Mère", "1965-07-20");
INSERT INTO tests.famille_table VALUES("5", "De Riv", "Geralt", "Père adoptif", "1942-07-07");
INSERT INTO tests.famille_table VALUES("6", "De Vengerberg", "Yennefer", "Mère adoptive", "1954-03-15");
INSERT INTO tests.famille_table VALUES("7", "Merigold", "Triss", "Tante", "1959-04-05");
INSERT INTO tests.famille_table VALUES("8", "Fiona Elen Riannon", "Ciri", "Fille", "1988-05-14");