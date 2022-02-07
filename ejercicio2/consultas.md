# Consultas:

1.  Listar los nombres de los alumnos ordenados alfabeticamente

            SELECT NOMBRE FROM usuarios ORDER BY NOMBRE;

2.  Cantidad total de mujeres

            SELECT COUNT(*) AS CANTIDAD_MUJERES
            FROM usuarios
            WHERE SEXO = 'M';

3.  Cantidad de usuarios por rol

            SELECT roles.DESCRIPCION as rol, COUNT(*) as cantidada
            FROM `usuarios` INNER JOIN roles
                ON usuarios.ROLID = roles.ROLID
            GROUP BY roles.ROLID;

4.  Promedio de edad desglosado por sexo

            SELECT  usuarios.SEXO as sexo,
                    AVG(usuarios.EDAD) AS promedio_edades
            FROM `usuarios`
            GROUP BY usuarios.SEXO;
