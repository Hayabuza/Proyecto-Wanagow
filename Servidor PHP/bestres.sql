PRAGMA foreign_keys=off;
BEGIN TRANSACTION;
CREATE TABLE "restaurants" (
    "name" TEXT NOT NULL,
    "area" TEXT NOT NULL,
    "style" TEXT NOT NULL
);
INSERT INTO "restaurants" VALUES('Bar Tomate','Chamberi','Italian with International Vibe');
INSERT INTO "restaurants" VALUES('Casa Alboroque','Madrid Centre','Modern Spanish');
INSERT INTO "restaurants" VALUES('Diverxo','Tetuan','Spanish-Mexican Fusion');
INSERT INTO "restaurants" VALUES('El Paraguas','Madrid  Centre','Traditional Spanish');
INSERT INTO "restaurants" VALUES('Sudestada','Chamberi','Asian');
INSERT INTO "restaurants" VALUES('Taberna Laredo','El Retiro','Tapas');
INSERT INTO "restaurants" VALUES('Tsunami','Chamberi','Best sushi');
INSERT INTO "restaurants" VALUES('La Gabinoteca','Chamberi','Avante-garde gastrobar');
INSERT INTO "restaurants" VALUES('Sergi Arola Gastro','Chamberi','Modern Spanish');
INSERT INTO "restaurants" VALUES('Cilantro','Chamberi','Tapas');
COMMIT;
