create table marca (
id integer primary key not null,
nome text
);

create table modelos (
id integer primary key not null,
nome text,
id_marca integer references marca (id)
);

create table carro (
id integer primary key not null,
nome text,
id_modelo integer references modelos(id),
ano text,
km text
);

insert into marca values(1, 'Chevrolet');
insert into marca values(2,'Ford');
insert into marca values(3, 'Honda');
insert into modelos values(1, 'Onix', 1);
insert into modelos values(2, 'S10', 1);
insert into modelos values(3, 'Focus', 2);
insert into modelos values(4, 'Fusion', 2);
insert into modelos values(5, 'Civic', 3);
insert into modelos values(6, 'Fit', 3);

select * from marca;
select * from modelos;
select * from carro;


