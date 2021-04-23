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

create table self_money.types_incomes(id_incomes int(4) auto_increment primary key,
                                    description_income varchar(30) not null 
)


ALTER TABLE types_incomes ADD type_income VARCHAR(20)



create table self_money.types_costs(id_costs int(4) auto_increment primary key,
									type_cost varchar(15) not null,
                                    name_cost varchar(30) not null 
)