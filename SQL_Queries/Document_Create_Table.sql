CREATE TABLE `CS_631`.`DOCUMENT`(
    `DOCID` VARCHAR(50) NOT NULL,
    `TITLE` VARCHAR(100) NOT NULL,
    `PDATE` DATE NOT NULL,
    `PUBLISHERID` VARCHAR(25) NOT NULL,
    PRIMARY KEY(`DOCID`),
    CONSTRAINT PUBLISHERID FOREIGN KEY PUBLISHER (PUBLISHERID)
        REFERENCES PUBLISHER (PUBLISHERID)
        ON DELETE CASCADE
) ENGINE = InnoDB;
