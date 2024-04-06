<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Casos Investigador</title>
</head>
<body>
    <h1 style="text-align: center;">Lista de Casos</h1>

    <?php
    require_once '../../Conexion.php';

    try {
        // Realizar la consulta SELECT
        $consulta = $base->query("SELECT * FROM CasoInvestigador");
        $casosInvestigador = $consulta->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table border='1'>
                <tr>
                    <th>Expediente</th>
                    <th>Agente de Caso</th>
                    <th>Nombre Victima</th>
                    <th>Identidad</th>
                    <th>Edad</th>
                    <th>Sinopsis</th>
                </tr>";
        
        foreach ($casosInvestigador as $casoInvestigador) {
            echo "<tr>";
            echo "<td>".$casoInvestigador['Expediente']."</td>";
            echo "<td>".$casoInvestigador['AgenteDeCaso']."</td>";
            echo "<td>".$casoInvestigador['NombreVictima']."</td>";
            echo "<td>".$casoInvestigador['Identidad']."</td>";
            echo "<td>".$casoInvestigador['DelitoEdad']."</td>";
            echo "<td>".$casoInvestigador['Sinopsis']."</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
    } catch (PDOException $e) {
        // Manejar errores de PDO
        echo "Error al obtener la lista de los casos: " . $e->getMessage();
    }
    ?>
</body>
</html>
