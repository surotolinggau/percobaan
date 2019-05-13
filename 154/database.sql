SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `test` ;

-- -----------------------------------------------------
-- Table `test`.`product`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `test`.`product` (
  `id_produk` INT NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(45) NULL ,
  `harga` DOUBLE NULL ,
  `jenis` VARCHAR(20) NULL ,
  PRIMARY KEY (`id_produk`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `test`.`buku`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `test`.`buku` (
  `id_produk` INT NOT NULL ,
  `penulis` VARCHAR(45) NULL ,
  `penerbit` VARCHAR(45) NULL ,
  `isbn` VARCHAR(45) NULL ,
  `tgl_terbit` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_produk`) ,
  INDEX `fk_buku_1` (`id_produk` ASC) ,
  CONSTRAINT `fk_buku_1`
    FOREIGN KEY (`id_produk` )
    REFERENCES `test`.`product` (`id_produk` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `test`.`album`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `test`.`album` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `judul` VARCHAR(100) NULL ,
  `artis` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `test`.`lagu`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `test`.`lagu` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `id_album` INT NULL ,
  `no_track` INT NULL ,
  `judul` VARCHAR(100) NULL ,
  `durasi` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_lagu_1` (`id_album` ASC) ,
  CONSTRAINT `fk_lagu_1`
    FOREIGN KEY (`id_album` )
    REFERENCES `test`.`album` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `test`.`mahasiswa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `test`.`mahasiswa` (
  `nim` VARCHAR(40) NOT NULL ,
  `nama` VARCHAR(45) NULL ,
  `jurusan` VARCHAR(45) NULL ,
  PRIMARY KEY (`nim`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `test`.`mata_kuliah`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `test`.`mata_kuliah` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `kode` VARCHAR(45) NULL ,
  `nama` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `test`.`mahasiswa_mk`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `test`.`mahasiswa_mk` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nim` VARCHAR(40) NULL ,
  `id_mk` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_mahasiswa_mk_1` (`nim` ASC) ,
  INDEX `fk_mahasiswa_mk_2` (`id_mk` ASC) ,
  CONSTRAINT `fk_mahasiswa_mk_1`
    FOREIGN KEY (`nim` )
    REFERENCES `test`.`mahasiswa` (`nim` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mahasiswa_mk_2`
    FOREIGN KEY (`id_mk` )
    REFERENCES `test`.`mata_kuliah` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
