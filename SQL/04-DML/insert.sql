-- Insert en la tabla usuarios --

INSERT INTO usuarios VALUES (null, 'carmen', 'rodolfa', 'carina@juan.com', '123', '2019-01-01');
INSERT INTO usuarios VALUES (null, 'venito', 'camelas', 'cardona@juan.com', '123', '2019-01-01');
INSERT INTO usuarios VALUES (null, 'elver gomez', 'torba', 'carto@juan.com', '123', '2019-01-01');

-- modificar solo ciertos ampos de un registro--

INSERT INTO usuarios(email, password) VALUES ('juan@juan.com', '123');