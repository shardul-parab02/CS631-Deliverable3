CREATE TABLE `CS_631`.`JOURNAL_VOLUME`(
    `DOCID` VARCHAR(50) NOT NULL,
    `JVOLUME` VARCHAR(100) NOT NULL,
    `EDITOR_ID` VARCHAR(100) NOT NULL,
    PRIMARY KEY(`DOCID`),
    CONSTRAINT JOURNAL_VOLUME_DOCID FOREIGN KEY JOURNAL_VOLUME(DOCID) REFERENCES DOCUMENT(DOCID) ON DELETE CASCADE ON UPDATE CASCADE
)