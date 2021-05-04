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

create table self_money.types_incomes(id_income int(4) auto_increment primary key,
                                    description_income varchar(30) not null 
);


ALTER TABLE self_money.types_incomes ADD type_income VARCHAR(20) NOT NULL;


create table self_money.types_costs(id_cost int(4) auto_increment primary key,
                                    description_cost varchar(30) not null,
                                    type_cost varchar(20) not null
);

alter table self_money.types_costs add user_id int (6);

ALTER TABLE self_money.types_costs ADD constraint fk_costs_users foreign key (user_id) references users(user_id);

alter table self_money.types_incomes add column user_id int(6);
alter table self_money.types_incomes add constraint fk_income_users foreign key (user_id) references users(user_id);

alter table self_money.types_incomes modify user_id int(6) not null;
