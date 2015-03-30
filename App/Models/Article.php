<?php

namespace App\Models;


class Article extends AppModel
{
    public function getLast()
    {
        $sql = "SELECT Articles.id, Articles.titre,Articles.date,Articles.auteur, Articles.contenu, Categories.titre as categorie
                FROM Articles
                LEFT JOIN Categories ON category_id = Categories.id
                ORDER BY date DESC";
        $res = $this->db->query($sql);
        return $res->fetchAll();
    }

}

/**
 *
 *
 * LE NOM DU MODEL C'EST LE NOM DE LA TABLE AU SINGULIER
 * ON CREER LES FONCTIONS QU'ON VEUT ICI
 * COMME J'AI FAIT POUR getLast
 *
 */