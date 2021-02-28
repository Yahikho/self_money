CREATE DATABASE self_money;

CREATE TABLE self_money.users (
    user_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(20) NOT NULL,
    user_password VARCHAR(40) NOT NULL,
    user_registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO self_money.users (user_name, user_password) VALUES ('jhon.bermudez','e10adc3949ba59abbe56e057f20f883e');


/*DROP TABLE users_login;*/