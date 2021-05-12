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


CREATE TABLE self_money.values_incomes(
	id_value_income INT(20) auto_increment primary key,
    value_income INT(20) 	not null,
    id_income INT(5) not null,
    value_income_record_date datetime not null,
    value_income_update_date datetime 
);

CREATE TABLE self_money.values_costs(
	id_value_cost INT(20) auto_increment primary key,
    value_cost INT(20) not null,
    id_cost INT(5) not null,
    value_cost_record_date datetime not null,
    value_cost_update_date datetime 
);


ALTER TABLE self_money.values_incomes add constraint fk_values_incomes_types_incomes foreign key (id_income) references types_incomes(id_income);

ALTER TABLE self_money.values_costs add constraint fk_values_costs_types_costs foreign key (id_cost) references types_costs(id_cost);

/*INSERT INTO self_money.values_costs(value_cost,id_cost,value_cost_record_date) VALUES (20000,72,'2015-11-05 14:29:36');*/

