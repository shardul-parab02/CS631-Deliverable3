CREATE TABLE `CS_631`.`WRITES`(
    `AUTHORID` VARCHAR(50) NOT NULL,
    `DOCID` VARCHAR(100) NOT NULL,
    PRIMARY KEY(`AUTHORID`, `DOCID`),
    CONSTRAINT WRITES_DOCID FOREIGN KEY WRITES(DOCID) REFERENCES BOOK(DOCID) ON DELETE CASCADE,
    CONSTRAINT WRITES_AUTHORID FOREIGN KEY WRITES(AUTHORID) REFERENCES AUTHOR(AUTHORID) ON DELETE CASCADE
);
