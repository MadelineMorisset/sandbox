CREATE TABLE villeFrancaise_table (id INT NOT NULL AUTO_INCREMENT,
                            	   nom_ville VARCHAR(255) NOT NULL, 
                            	   code_postal VARCHAR(255) NOT NULL,
                            	   PRIMARY KEY (id),
                           		   KEY id (id),
                           		   UNIQUE id_2 (id));