CREATE TABLE `CS_631`.`JOURNAL_ISSUE`(
    `DOCID` VARCHAR(50) NOT NULL,
    `ISSUE_NO` VARCHAR(100) NOT NULL,
    `SCOPE` VARCHAR(100) NOT NULL,
    PRIMARY KEY(`DOCID`, `ISSUE_NO`),
    CONSTRAINT JOURNAL_ISSUE_DOCID FOREIGN KEY JOURNAL_ISSUE(DOCID) REFERENCES JOURNAL_VOLUME(DOCID) ON DELETE CASCADE ON UPDATE CASCADE
)
