
CREATE TABLE `cursado` (
  `nombremateria` varchar(100) NOT NULL,
  `idalumno` int(11) NOT NULL,
   status tinyint(1) NOT NULL);

   CREATE TABLE programa (
   `idprograma` int not null auto_increment PRIMARY KEY,
   `Nombreprograma` varchar(100) NOT NULL);


CREATE TABLE `materia` (
 `idmateria` int not null auto_increment PRIMARY KEY,
  `Nombremateria` varchar(100) DEFAULT NULL,
  `clave` varchar(40) DEFAULT NULL,
  `idprograma` int(11) NOT NULL,
   status tinyint(1), 
   FOREIGN KEY (`idprograma`) REFERENCES `programa` (`idprograma`));

CREATE TABLE `alumno` (
   idalumno int not null auto_increment primary key,
  `nombre` varchar(50) DEFAULT NULL,
  `cuenta` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `idprograma` int NOT NULL,
   FOREIGN KEY (`idprograma`) REFERENCES `programa` (`idprograma`));

create table usuario(
idusuario int not null auto_increment PRIMARY KEY,
nombreusuario varchar(100),
contrasenia varchar(100));

CREATE TABLE `egresados` (
   idalumno int not null auto_increment primary key,
  `nombre` varchar(100) NOT NULL,
  `cuenta` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fecha` date NOT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `idprograma` int(11) NOT NULL,
   FOREIGN KEY (`idprograma`) REFERENCES `programa` (`idprograma`));

CREATE TABLE `a_cursar` (
  `nombremateria` varchar(100) NOT NULL,
  `idalumno` int(11) NOT NULL,
  status tinyint(1) NOT NULL);

create table egresados_al(
    nombre varchar(100) not null,
    correo varchar(50) not null,
    telefono varchar(50) not null,
    fecha varchar(50) not null);

create table bajas_al(
nombre varchar(100) not null,
correo varchar(50) not null,
telefono varchar(50) not null,
motivo varchar(50) not null);

INSERT INTO `programa`(`idprograma`, `Nombreprograma`) VALUES ('','GESTION DE CALIDAD'),
                                                     (null,'FISIOTERAPIA DEPORTIVA'),
                                                     (null,'MBA FINANZAS'),
                                                     (null,'MBA MERCADOTENCIA'),
                                                     (null,'MBA TALENTO'),
                                                     (null,'DERCHOS HUMANOS'),
                                                     (null,'DERECHO CORPORATIVO'),
                                                     (null,'DERECHO CIVIL'),
                                                     (null,'DERECHO FISCAL'),
                                                     (null,'ESPECIALIDAD EN SEGURIDAD E HIGIENE'),
                                                     (null,'NUTRICION CLINICA');

/*Gestion de calidad */

create table PTMGEC33F15(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Herramientas_Analiticas	varchar(100) not null,
Estadistica_Descriptiva_Inferencial varchar(100) not null,	
Direccion_Sistemas_Productividad varchar(100) not null,	
Logistica_Estrategica varchar(100) not null,	
Administracion_Estrategica_Calidad varchar(100) not null,	
Administracion_Sistemas_Calidad varchar(100) not null,	
Administracion_Total_Calidad varchar(100) not null,	
Diseño_Experimentos_Calidad varchar(100) not null,
Control_Estadistico_Procesos_Manufactura_Servicios varchar(100) not null,	
Investigacion_Operaciones varchar(100) not null,	
Metodos_Calidad_Enfoque_Cliente varchar(100) not null,	
Desarrollo_Comportamiento_Organizacional varchar(100) not null,	
Sistema_Costos_Calidad varchar(100) not null,
Normatividad varchar(100) not null);


/*Fisioterapia */

create table PTMFID31F15(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Biomecanica_Aplicada_Deporte varchar(50) not null,	
Fisiologia_Entrenamiento varchar(50) not null,	
Traumatologia_Deportiva_Exploracion_Articular_Tratamiento varchar(50) not null,
Exploracion_Articular_Tratamiento varchar(50) not null,	
Planificacion_Entrenamiento varchar(50) not null,	
Urgencias_Deporte varchar(50) not null,
Psicologia_Deportiva varchar(50) not null,	
Control_Motor varchar(50) not null,
Seminario_Investigacion varchar(50) not null,
Ejercicio_Terapeutico_Recuperacion_Funcional varchar(50) not null,
Investigacion_Aplicada_I varchar(50) not null,
Investigacion_Aplicada_II varchar(50) not null);

/*Finanzas */

create table PTMNFZ33F16(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Metodos_Cuantitativos_Negocios varchar(100) not null,
Metodos_Cuantitativos_Negocios2 varchar(100) not null,	
Competencias_Comunicacion varchar(100) not null,	
Tecnicas_Comunicacion_Estilo_Comunicacion_Efectiva varchar(100) not null,	
Informacion_Financiera_Administrativa varchar(100) not null,
Economia_Organizacion varchar(100) not null,
Liderazgo_Comportamiento_Organizacional varchar(100) not null,	
Mercadotecnia_Estrategica varchar(100) not null,	
Finanzas_Corporativas varchar(100) not null,
Administracion_Estrategica_Cadena_Valor varchar(100) not null,	
Evaluacion_Proyectos_Inversion varchar(100) not null,
Modelos_Econometricos varchar(100) not null,
Curso_Apoyo_Fundamentos_Ciencia_Datos varchar(100) not null,	
Mercado_Dinero_Capitales varchar(100) not null,	
Administracion_Riesgos varchar(100) not null);

/*Mercadotecnia */

create table PTMNMK33F16(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Metodos_Cuantitativos_Negocios varchar(50) not null,	
Metodos_Cuantitativos_Negocios_Competencias_Comunicacion varchar(50) not null,	
Tecnicas_Comunicacion_Estilo_Comunicacion_Efectiva varchar(50) not null,	
Informacion_Financiera_Administrativa_Economia_Organizacion varchar(50) not null,	
Liderazgo_Comportamiento_Organizacional	varchar(50) not null,
Mercadotecnia_Estrategica varchar(50) not null,	
Finanzas_Corporativas varchar(50) not null,
Administracion_Estrategica_Cadena_Valor	varchar(50) not null,
Inteligencia_Mercados varchar(50) not null,
Diseño_Estrategico_Nuevos_Productos varchar(50) not null,
Curso_Apoyo_Fundamentos_Ciencia_Datos varchar(50) not null,	
Estrategias_Precios varchar(50) not null,
Mercadotecnia_Digital varchar(50) not null);

/*Talento */

create table PTMNDT33F16(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Metodos_Cuantitativos_Negocios	varchar(100) not null,
Metodos_Cuantitativos_Negocios2 varchar(100) not null,	
Competencias_Comunicacion varchar(100) not null,
Economia_Organizacion varchar(100) not null,
Informacion_Financiera_Administrativa	varchar(100) not null,
Liderazgo_Comportamiento_Organizacional varchar(100) not null,
Mercadotecnia_Estrategica varchar(100) not null,
Finanzas_Corporativas varchar(100) not null,
Administracion_Estrategica_Cadena_Valor varchar(100) not null,	
Estrategias_Direccion_Financiera varchar(100) not null,	
Logistica_Comercial_Global varchar(100) not null,
Soluciones_Distribucion_Logistica varchar(100) not null,
Finanzas_Internacionales varchar(100) not null,
Curso_Apoyo_Fundamentos_Ciencia_Datos varchar(100) not null,	
Estrategia_Organizaciones_Entornos_Globales varchar(100) not null,
Seminario_Integrador varchar(100) not null,	
Tecnicas_Comunicacion_Estilo_Comunicacion_Efectiva varchar(100) not null);

/*Derechos Humanos */

create table PTMDHA33F17(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Competencias_Comunicacion varchar(100) not null,
Metodologia_Investigacion_Juridica varchar(100) not null,	
Metodologia_Investigacion_Juridica2 varchar(100) not null,	
Metodologia_Investigacion_Juridica3 varchar(100) not null,	
Metodos_Tecnicas_Investigacion_Juridica	varchar(100) not null,
Tecnicas_Comunicacion_Estilo_Comunicacion_Efectiva varchar(100) not null,	
Teoria_General_Derecho_Constitucional varchar(100) not null,	
Tratados_Organismos_Internacionales varchar(100) not null,	
Derecho_Administrativo_Administracion_Publica	varchar(100) not null,
Derecho_Civil varchar(100) not null,	
Metodos_Alternos_Solucion_Controversias varchar(100) not null,	
Tecnicas_Argumentacion_Procedimiento_Escrito_Juicio_Oral varchar(100) not null,	
Marco_Juridico_Corporaciones_Mercantiles varchar(100) not null,
Relaciones_Individuales_Colectivas_Trabajo varchar(100) not null,	
Obligaciones_Tributarias_Laborales_Corporaciones varchar(100) not null,	
Derecho_Procesal_Amparo_Laboral varchar(100) not null);

/*Derecho Corporativo */
create table PTMDCL33F17(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
METODOS_TECNICAS_INVESTIGACION_JURIDICA varchar(100) not null,
TECNICAS_COMUNICACION_ESTILO_COMUNICACION_EFECTIVA varchar(100) not null,
TECNICAS_ARGUMENTACION_PROCEDIMIENTO_ESCRITO_JUICIO_ORAL varchar(100) not null,
DERECHO_ADMINISTRATIVO_ADMINISTRACION_PUBLICA varchar(100) not null,
DERECHO_CIVIL varchar(100) not null,
RELACIONES_INDIVIDUALES_COLECTIVAS_TRABAJO varchar(100) not null,
DERECHO_PROCESAL_AMPARO_LABORAL varchar(100) not null,
MARCO_JURIDICO_CORPORACIONES_MERCANTILES varchar(100) not null,
OBLIGACIONES_TRIBUTARIAS_LABORALES_CORPORACIONES varchar(100) not null,
TEORIA_GENERAL_DERECHO_CONSTITUCIONAL varchar(100) not null,
TRATADOS_ORGANISMOS_INTERNACIONALES varchar(100) not null,
METODOS_ALTERNOS_SOLUCION_CONTROVERSIAS varchar(100) not null);

/*Derecho civil */
create table PTMDLO33F17(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
METODOS_TECNICAS_INVESTIGACION_JURIDICA varchar(100) not null,
TECNICAS_COMUNICACION_ESTILO_COMUNICACION_EFECTIVA varchar(100) not null,
TECNICAS_ARGUMENTACION_PROCEDIMIENTO_ESCRITO_JUICIO_ORAL varchar(100) not null,
DERECHO_FAMILIAR_PROCEDIMIENTOS varchar(100) not null,
DERECHO_ADMINISTRATIVO_ADMINISTRACION_PUBLICA varchar(100) not null,
DERECHO_CIVIL varchar(100) not null,
OBLIGACIONES_CONTRATOS_MATERIA_CIVIL varchar(100) not null,
DERECHO_PROCESAL_CIVIL varchar(100) not null,
DERECHO_SUCESORIO varchar(100) not null,
TEORIA_GENERAL_DERECHO_CONSTITUCIONAL varchar(100) not null,
TRATADOS_ORGANISMOS_INTERNACIONALES varchar(100) not null,
METODOS_ALTERNOS_SOLUCION_CONTROVERSIAS varchar(100) not null);

/*Derecho Fiscal*/
create table PTMDEF33F18(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Competencias_Comunicacion varchar(100) not null,
Metodologia_Investigacion_Juridica varchar(100) not null,
Metodologia_Investigacion_Juridica2 varchar(100) not null,
Metodologia_Investigacion_Juridica3 varchar(100) not null,
Tecnicas_Comunicacion_Estilo_Comunicacion_Efectiva varchar(100) not null,	
Derecho_Administrativo_Administracion_Publica varchar(100) not null,
Derecho_Fiscal varchar(100) not null,
Teoria_Contribuciones varchar(100) not null,
Derecho_Penal_Fiscal varchar(100) not null,
Impuestos_Personas_Fisicas_Morales varchar(100) not null,
Derecho_Procesal_Administrativo_Fiscal varchar(100) not null,
Juicio_Amparo varchar(100) not null,
Sistema_Nacional_Anticorrupcion	varchar(100) not null,
Derecho_Aduanero varchar(100) not null,	
Ingenieria_Fiscal varchar(100) not null);


/*Especialidad en seguridad e Higiene */
create table PTESHI31F16(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Salud_Ocupacional_Ambientes_Trabajo varchar(100) not null,	
Seguridad_Industrial_Ergonomia_Productividad varchar(100) not null,
Gestion_Programas_Seguridad_ProteccionAmbiental varchar(100) not null,
Herramientas_Estadisticas_Aplicadas_Prevencion varchar(100) not null,
Diseño_Evaluacion_Programas_Prevencion varchar(100) not null,
Investigacion_Analisis_Riesgos_Laborales varchar(100) not null,
Cultura_Normativa_Seguridad_Higiene_Industrial varchar(100) not null);


/*Nutricion Clinica */
create table PCMNUC41F09(
idprograma int not null,
cuenta varchar(50) not null,
nombre varchar(100) not null,
Fundamentos_Nutricion varchar(100) not null,
Evaluacion_Clinica_Nutricional varchar(100) not null,
Calculo_Requerimientos_Nutrimentales	varchar(100) not null,
Nutricion_Metabolismo varchar(100) not null,
Tendencias_Actuales_Nutricion varchar(100) not null,	
Alimentacion_Enteral varchar(100) not null,
Alimentacion_Parental varchar(100) not null,
Evaluacion_Nutricional_Paciente_Hospitalizado varchar(100) not null,
Nutricion_Perioperatoria varchar(100) not null,
Metodologia_Investigacion varchar(100) not null,
Nutricion_Enfermedades_Cardiovasculares varchar(100) not null,
Nutricion_Cancer varchar(100) not null,
Nutricion_Enfermedad_Pulmonar varchar(100) not null,
Nutricion_EnfermedadRenal varchar(100) not null,
Nutricion_Trastornos_Musculoesqueletico_Neurologicos varchar(100) not null,
Nutricion_Enfermedades_Infecciosas_Hipermetabolicas varchar(100) not null,
Nutricion_Enfermedades_Endocrinologicas varchar(100) not null,
Nutricion_Enfermedades_Gastrointestinales varchar(100) not null);

