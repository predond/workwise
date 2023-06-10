CREATE TABLE `pracownik` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `imie` varchar(15),
  `nazwisko` varchar(38),
  `pesel` int,
  `ulica` varchar(60),
  `numer_domu` varchar(7),
  `miasto` varchar(35),
  `kod_pocztowy` varchar(6),
  `telefon_kom` varchar(28),
  `email` varchar(350),
  `dzial_id` int,
  `szkolenie_id` int,
  `badanie_id` int
);

CREATE TABLE `dzial` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nazwa` varchar(30),
  `ilosc_pracownikow` int
);

CREATE TABLE `szkolenie` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `kategoria` int,
  `ukonczone` boolean,
  `prowadzacy_id` int,
  `data_waznosci` datetime,
  `koszt` decimal
);

CREATE TABLE `szkolenie_kategoria` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nazwa` varchar(50),
  `priotytet` int
);

CREATE TABLE `szkolenie_prowadzacy` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `pesel` int UNIQUE,
  `imie` varchar(15),
  `nazwisko` varchar(38),
  `numer_licencji` varchar(15)
);

CREATE TABLE `badanie` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `typ_badania` int,
  `lekarz_id` int,
  `data_waznosci` datetime,
  `koszt` decimal
);

CREATE TABLE `badanie_typ` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nazwa` varchar(50),
  `priorytet` int
);

CREATE TABLE `badanie_lekarz` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `imie` varchar(15),
  `nazwisko` varchar(38),
  `specjalizacja` varchar(50),
  `numer_licencji` varchar(15),
  `telefon_kom` varchar(28)
);

ALTER TABLE `pracownik` ADD FOREIGN KEY (`pesel`) REFERENCES `szkolenie_prowadzacy` (`pesel`);

ALTER TABLE `pracownik` ADD FOREIGN KEY (`dzial_id`) REFERENCES `dzial` (`id`);

ALTER TABLE `pracownik` ADD FOREIGN KEY (`szkolenie_id`) REFERENCES `szkolenie` (`id`);

ALTER TABLE `pracownik` ADD FOREIGN KEY (`badanie_id`) REFERENCES `badanie` (`id`);

ALTER TABLE `szkolenie` ADD FOREIGN KEY (`kategoria`) REFERENCES `szkolenie_kategoria` (`id`);

ALTER TABLE `szkolenie` ADD FOREIGN KEY (`prowadzacy_id`) REFERENCES `szkolenie_prowadzacy` (`id`);

ALTER TABLE `badanie` ADD FOREIGN KEY (`typ_badania`) REFERENCES `badanie_typ` (`id`);

ALTER TABLE `badanie` ADD FOREIGN KEY (`lekarz_id`) REFERENCES `badanie_lekarz` (`id`);
