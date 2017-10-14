#
# TABLE STRUCTURE FOR: Nilai
#

DROP TABLE IF EXISTS Nilai;

CREATE TABLE `Nilai` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kode_mk` varchar(20) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `sks` smallint(10) NOT NULL,
  `nrp` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `semester` smallint(10) NOT NULL,
  `tugas` double NOT NULL,
  `uts` double NOT NULL,
  `uas` double NOT NULL,
  `nilaiakhir` double NOT NULL,
  `indeks` varchar(5) NOT NULL,
  `nxk` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (8, '47 vy', 'Focused tertiary functionalities', 1, '194', 'Quentin Hauck', 2, '36', '93', '58', '0', 'x', '0');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (9, '39 mw', 'Multi-layered cohesive time-frame', 1, '701', 'Trevion Cummerata', 9, '50', '87', '17', '45', 'c', '1190165.0157559');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (10, '98 qt', 'Open-architected executive collaboration', 3, '284', 'Andres Morar IV', 2, '19', '0', '40', '7362', 'z', '1810581.0008');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (11, '44 hq', 'Horizontal explicit neural-net', 4, '497', 'Mrs. Wendy Fadel DDS', 3, '85', '49', '31', '253', 'h', '48362314.7395');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (12, '32 jj', 'Synergistic solution-oriented time-frame', 4, '285', 'Lemuel Mosciski', 6, '55', '17', '36', '510', 'h', '53.925');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (13, '66 sy', 'Ergonomic reciprocal processimprovement', 3, '168', 'John Metz', 4, '17', '42', '19', '553', 'p', '8213216.406');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (14, '16 be', 'Innovative fresh-thinking support', 3, '583', 'Alvera Brekke', 3, '61', '19', '82', '3', 'x', '244021.491603');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (15, '84 cx', 'Phased 3rdgeneration interface', 4, '825', 'Trey Lowe', 5, '62', '15', '74', '9798', 't', '6318202.7313075');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (16, '56 pd', 'Visionary web-enabled synergy', 3, '209', 'Prof. Tomas Jast', 5, '52', '41', '8', '128109', 'l', '35591265.78075');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (17, '74 bq', 'Focused holistic knowledgebase', 1, '172', 'Llewellyn Murray', 3, '45', '39', '100', '7', 'h', '1932282.1');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (18, '40 kv', 'Compatible human-resource implementation', 2, '413', 'Wava Bergnaum', 5, '86', '76', '78', '0', 't', '56159.46937687');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (19, '22 vn', 'Decentralized transitional data-warehouse', 3, '440', 'Dr. Wiley Price MD', 3, '30', '0', '30', '241', 'k', '13.667962');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (20, '90 ly', 'Secured mobile model', 2, '711', 'Ricardo Marvin', 1, '85', '35', '15', '46468466', 'p', '50008812.40428');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (21, '75 vd', 'Quality-focused fresh-thinking frame', 4, '865', 'Howell Berge PhD', 8, '33', '41', '18', '88539', 'a', '148.7071404');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (22, '76 ro', 'Multi-tiered user-facing strategy', 4, '041', 'Esta Hettinger', 9, '63', '70', '11', '606232', 'x', '6.051259');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (23, '76 if', 'Configurable global installation', 3, '486', 'Judy Shanahan', 6, '14', '78', '70', '95', 't', '110211769.07017');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (24, '18 jy', 'Optimized composite collaboration', 1, '537', 'Alanis Cormier', 5, '33', '7', '29', '37', 'z', '18.4160405');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (25, '97 qn', 'Object-based context-sensitive protocol', 3, '778', 'Xavier Frami', 8, '78', '64', '86', '2484', 'j', '249.382');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (26, '13 up', 'Synchronised systematic instructionset', 1, '493', 'Aimee Gaylord', 8, '56', '23', '33', '2361173', 'y', '3.171');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (27, '96 zz', 'Robust contextually-based superstructure', 1, '660', 'Mr. Darrel Medhurst IV', 7, '11', '5', '4', '27723787', 'o', '516.97967874');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (28, '32 bj', 'Visionary high-level application', 4, '526', 'Kobe Schulist', 9, '90', '61', '71', '434', 'u', '88381.66694');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (29, '83 ky', 'Robust logistical leverage', 1, '659', 'Miss Carolyne Beahan', 7, '83', '86', '89', '6274802', 'a', '339210.5');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (30, '24 db', 'Quality-focused dynamic complexity', 2, '272', 'Joyce Lesch', 1, '26', '89', '48', '0', 'd', '1722263.3419494');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (31, '26 zr', 'Synchronised responsive success', 2, '344', 'Danielle Kuhn', 5, '51', '8', '92', '443', 'x', '8927.28');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (32, '09 sr', 'Total asynchronous forecast', 4, '263', 'Dr. Shanelle Strosin', 6, '92', '44', '96', '2706', 'b', '553830.627875');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (33, '75 kd', 'Synchronised global neural-net', 1, '936', 'Arnold Moore I', 6, '26', '55', '78', '1', 'o', '82539860.46');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (34, '05 ot', 'Phased demand-driven adapter', 4, '272', 'Ms. Aglae Hettinger', 6, '55', '28', '88', '392', 'o', '427729311.4042');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (35, '11 mm', 'Operative even-keeled systemengine', 2, '730', 'Dr. Judd Lockman Sr.', 6, '79', '78', '99', '0', 'i', '0.878212');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (36, '94 ed', 'Sharable holistic core', 1, '666', 'Dr. Sarai Wolf', 1, '20', '8', '83', '49', 'v', '693.653');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (37, '32 ac', 'Ameliorated optimizing info-mediaries', 1, '524', 'Mr. Tyrique Terry IV', 4, '99', '98', '25', '608011512', 'm', '0.2985');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (38, '95 ro', 'Vision-oriented stable alliance', 1, '328', 'Wilmer Kautzer', 7, '17', '94', '3', '3', 'b', '0');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (39, '76 mv', 'Open-architected well-modulated budgetarymanagemen', 4, '165', 'Luigi Cormier', 1, '60', '95', '21', '0', 'f', '836579629.70011');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (40, '76 br', 'Re-engineered tertiary GraphicInterface', 1, '640', 'Miss May Kuphal PhD', 1, '48', '54', '100', '8672273', 'g', '5.89796');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (41, '30 wj', 'Versatile leadingedge implementation', 4, '193', 'Dr. Elijah Cartwright IV', 7, '78', '28', '33', '9870', 'l', '250.99');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (42, '52 qk', 'Innovative content-based installation', 4, '827', 'Prof. Reginald Becker', 9, '90', '6', '34', '0', 'o', '307558382.42999');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (43, '77 au', 'Advanced dynamic portal', 4, '187', 'Sincere Yost', 4, '1', '89', '20', '7420465', 'x', '2419218.338');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (44, '60 iv', 'Assimilated multi-tasking workforce', 3, '303', 'Tavares Tromp', 3, '38', '54', '59', '2', 'o', '3665.02587372');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (45, '76 yg', 'Exclusive clear-thinking productivity', 3, '099', 'Bennie Kuphal IV', 7, '76', '62', '89', '50947', 'k', '0');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (46, '84 kl', 'Cross-group context-sensitive matrix', 4, '961', 'Nella Wilkinson', 4, '72', '51', '94', '0', 'l', '0');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (47, '62 xu', 'Re-contextualized fresh-thinking knowledgebase', 3, '461', 'Unique West', 7, '61', '60', '87', '97239', 'i', '554601.46918');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (48, '51 mr', 'Sharable human-resource info-mediaries', 4, '746', 'Mrs. Rosie Littel Jr.', 3, '43', '21', '98', '1745837', 't', '26063');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (49, '63 bs', 'Profound mission-critical product', 3, '184', 'Mrs. Haylie Bergnaum Jr.', 2, '1', '83', '29', '27617791', 'b', '21.782168417');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (50, '20 mz', 'Synergized fresh-thinking capacity', 4, '448', 'Berta Schroeder', 6, '52', '24', '67', '0', 'n', '6943.5102829');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (51, '84 if', 'Public-key grid-enabled framework', 4, '243', 'Annabel Deckow', 7, '15', '91', '45', '9481137', 'f', '50.41');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (52, '45 xl', 'Proactive modular GraphicalUserInterface', 4, '401', 'Dr. Johathan Welch DVM', 3, '57', '40', '38', '741', 'g', '2439.8073');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (53, '20 gt', 'Right-sized neutral conglomeration', 2, '240', 'Justus Rau', 3, '98', '39', '71', '6457', 'l', '83594.130961');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (54, '51 vj', 'Compatible fresh-thinking installation', 1, '256', 'Dr. Stephen Bosco', 2, '45', '61', '49', '782857', 'g', '9634809.76');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (55, '86 ph', 'Grass-roots bi-directional architecture', 1, '995', 'Duane Armstrong', 6, '23', '74', '47', '49423', 'z', '8.09689');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (56, '78 wa', 'Enhanced fresh-thinking architecture', 3, '830', 'Prof. Kayley Botsford', 7, '67', '12', '27', '8885', 'b', '5593630.352528');
INSERT INTO Nilai (`id`, `kode_mk`, `nama_mk`, `sks`, `nrp`, `nama`, `semester`, `tugas`, `uts`, `uas`, `nilaiakhir`, `indeks`, `nxk`) VALUES (57, '80 kl', 'Right-sized mission-critical instructionset', 4, '844', 'Colin Swaniawski Sr.', 2, '21', '19', '51', '0', 'k', '1602277.23');


