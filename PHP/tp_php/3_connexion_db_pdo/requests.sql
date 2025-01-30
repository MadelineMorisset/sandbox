-- #### SELECT
-- 1. **Lister tous les pays :**
SELECT libelle_pays
FROM t_pays
ORDER BY libelle_pays ASC;

-- 2. **Afficher les pays du continent africain (continent_id = 1) :**
SELECT libelle_pays, continent_id
FROM t_pays
WHERE continent_id = 1
ORDER BY libelle_pays ASC;

-- 3. **Trouver les pays avec une espérance de vie supérieure à 75 ans :**
SELECT libelle_pays, esperance_vie_pays
FROM t_pays
WHERE esperance_vie_pays > 75
ORDER BY esperance_vie_pays ASC;

-- 4. **Lister les pays par ordre décroissant de population :**
SELECT libelle_pays, population_pays
FROM t_pays
ORDER BY population_pays DESC;

-- 5. **Afficher le nombre total de pays par continent :**
SELECT COUNT(*) AS nombre_pays_par_continent, libelle_continent
FROM t_pays
INNER JOIN t_continents ON t_pays.continent_id = t_continents.id_continent
GROUP BY continent_id
ORDER BY nombre_pays_par_continent ASC;


-- #### INSERT
-- 6. **Ajouter un nouveau pays :**
INSERT INTO `t_regions` (`libelle_region`, `continent_id`) VALUES
('Europe du Sud-Est', 5);

INSERT INTO t_pays (libelle_pays, Capitale, Superficie, libelle_pays_en, population_pays, taux_natalite_pays, taux_mortalite_pays, esperance_vie_pays, taux_mortalite_infantile_pays, nombre_enfants_par_femme_pays, taux_croissance_pays, population_plus_65_pays, continent_id, region_id)
VALUES ("Kosovo", "Pristina", 10908, "", 1958773, 15, 8, 78, 8, 2, 3, 11, 5, 21);


-- #### DELETE
-- 7. **Supprimer un pays basé sur l'ID :**
DELETE FROM t_pays
WHERE id_pays = 403;

SELECT *
FROM t_pays
WHERE id_pays = 403;

-- 8. **Supprimer tous les pays avec une population inférieure à 100 000 :**
DELETE FROM t_pays
WHERE population_pays < 100000;

SELECT *
FROM t_pays
WHERE population_pays < 100000;

SELECT *
FROM t_pays
WHERE population_pays >= 100000;

-- #### UPDATE
-- 9. **Mettre à jour la population d'un pays :**
UPDATE t_pays
SET population_pays = 135421
WHERE id_pays = 223;

SELECT id_pays, libelle_pays, population_pays
FROM t_pays
WHERE id_pays = 223;

-- 10. **Changer la capitale d'un pays :**
SELECT id_pays, libelle_pays, Capitale
FROM t_pays
WHERE libelle_pays = "Etats-Unis";

UPDATE t_pays
SET Capitale = "New-York"
WHERE id_pays = 298;

SELECT id_pays, libelle_pays, Capitale
FROM t_pays
WHERE id_pays = 298;

-- 11. **Augmenter le taux de natalité de 1 point pour tous les pays africains :**
UPDATE t_pays
SET taux_natalite_pays = taux_natalite_pays + 1
WHERE continent_id = 1;

SELECT id_pays, libelle_pays, taux_natalite_pays
FROM t_pays
WHERE continent_id = 1;
