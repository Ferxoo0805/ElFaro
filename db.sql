DELIMITER $$

CREATE PROCEDURE getAllUsers()
BEGIN
    SELECT * FROM usuarios;
END $$

CREATE PROCEDURE insertUser(IN nombre VARCHAR(100), IN email VARCHAR(100))
BEGIN
    INSERT INTO usuarios(nombre, email) VALUES(nombre, email);
END $$

DELIMITER ;
