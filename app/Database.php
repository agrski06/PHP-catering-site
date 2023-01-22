<?php
class DataBase
{
    private $mysqli;
    public function __construct($serwer, $user, $pass, $baza)
    {
        $this->mysqli = new mysqli($serwer, $user, $pass, $baza);
        $this->mysqli->set_charset("utf8");
    }

    function __destruct()
    {
        $this->mysqli->close();
    }

    public function select($sql, $pola)
    {
        //parametr $sql – łańcuch zapytania select
        //parametr $pola - tablica z nazwami pol w bazie 
        //Wynik funkcji – kod HTML tabeli z rekordami (String)
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola); //ile pól
            $ile = $result->num_rows; //ile wierszy
            // pętla po wyniku zapytania $results
            $tresc .= "<table><tbody>";
            while ($row = $result->fetch_object()) {
                $tresc .= "<tr>";
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    $tresc .= "<td>" . $row->$p . "</td>";
                }
                $tresc .= "</tr>";
            }
            $tresc .= "</table></tbody>";
            $result->close(); /* zwolnij pamięć */
        }
        return $tresc;
    }

    // public function selectUser($login, $passwd, $tabela)
    // {
    //     //parametry $login, $passwd , $tabela – nazwa tabeli z użytkownikami
    //     //wynik – id użytkownika lub -1 jeśli dane logowania nie są poprawne
    //     $id = -1;
    //     $sql = "SELECT * FROM $tabela WHERE userName='$login'";
    //     if ($result = $this->mysqli->query($sql)) {
    //         $ile = $result->num_rows;
    //         if ($ile == 1) {
    //             $row = $result->fetch_object(); //pobierz rekord z użytkownikiem
    //             $hash = $row->passwd; //pobierz zahaszowane hasło użytkownika
    //             //sprawdź czy pobrane hasło pasuje do tego z tabeli bazy danych:
    //             if (password_verify($passwd, $hash))
    //                 $id = $row->id; //jeśli hasła się zgadzają - pobierz id

    //         }
    //     }
    //     return $id; //id zalogowanego użytkownika(>0) lub -1
    // }

    public function delete($sql)
    {
        if ($this->mysqli->query($sql))
            return true;
        else
            return false;
    }
    public function insert($sql)
    {
        if ($this->mysqli->query($sql))
            return true;
        else
            return false;
    }
    public function getMysqli()
    {
        return $this->mysqli;
    }
}
