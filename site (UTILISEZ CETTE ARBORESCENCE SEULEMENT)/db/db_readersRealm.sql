USE db_readersRealm;

CREATE TABLE t_user (
    user_id INT NOT NULL AUTO_INCREMENT,
    useUsername varchar(50) NOT NULL,
    usePassword varchar(255) NOT NULL,
    useRegistrationDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    useNbrProposedBook INT DEFAULT 0,
    useNbrLike INT DEFAULT 0,
    useIsAdmin tinyint(1) DEFAULT 0,
    PRIMARY KEY (user_id)
);

CREATE TABLE t_writer (
    writer_id INT NOT NULL AUTO_INCREMENT,
    wriFirstname varchar (50) NOT NULL,
    wriLastname varchar (50) NOT NULL,
    PRIMARY KEY (writer_id)
);

CREATE TABLE t_category (
    category_id INT NOT NULL AUTO_INCREMENT,
    catCategory varchar(50) NOT NULL,
    PRIMARY KEY (category_id)
);

CREATE TABLE t_book (
    book_id INT NOT NULL AUTO_INCREMENT,
    booTitle varchar(50) NOT NULL,
    booExemplary varchar(100) NOT NULL,
    booResumeBook TEXT NOT NULL,
    booNbrPage INT NOT NULL,
    booEditorName varchar(50) NOT NULL,
    booEditionDate DATETIME NOT NULL,
    booLikeRatio decimal(4,1) DEFAULT NULL,
    booCoverImage varchar(250) NOT NULL,
    category_fk INT NOT NULL,
    writer_fk INT NOT NULL,
    user_fk INT NOT NULL,
    PRIMARY KEY (book_id),
    FOREIGN KEY (category_fk) REFERENCES t_category(category_id),
    FOREIGN KEY (writer_fk) REFERENCES t_writer(writer_id),
    FOREIGN KEY (user_fk) REFERENCES t_user(user_id)
);

CREATE TABLE t_rate (
    user_fk INT NOT NULL,
    book_fk INT NOT NULL,
    ratRate tinyint DEFAULT NULL,
    PRIMARY KEY (user_fk, book_fk),
    FOREIGN KEY (user_fk) REFERENCES t_user (user_id),
    FOREIGN KEY (book_fk) REFERENCES t_book (book_id)
);