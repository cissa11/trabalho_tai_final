<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::insert('INSERT INTO clientes(nome, filme, email) VALUES(?, ?, ?)',
            array('Maria Ceçília Oitava', 'Lucy', 'mariacecilia@gmail.com'));
        DB::insert('INSERT INTO alunos(nome, filme, email) VALUES(?, ?, ?)',
            array('Paulo Freire de Andáloga', 'Harry Potter', 'rary@gmail.com'));
        DB::insert('INSERT INTO filme_models(nome, genero) VALUES(?, ?)',
            array('Moana', 'Infantil'));
        DB::insert('INSERT INTO filme_models(nome, genero) VALUES(?, ?)',
            array('Invocação do Mal', 'Terror'));
    }
}
