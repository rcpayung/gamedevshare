create table User (
	varchar(25) username,
	varchar(25) firstname,
	varchar(25) lastname,
	
	primary key (username) delete on null
);