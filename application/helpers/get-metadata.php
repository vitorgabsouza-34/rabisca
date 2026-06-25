<?php
function getMetadata(string $page): array
{
    $metadata = [
        'home' => [
            'title' => 'Rabisca - Suas Ideias em um Só Lugar',
            'description' => 'Bem-vindo ao Rabisca, seu aplicativo simples e rápido para anotações.',
            'keywords' => 'início, rabisca, anotações, app, boas-vindas'
        ],
        'signup' => [
            'title' => 'Rabisca - Criar Conta',
            'description' => 'Crie sua conta no Rabisca e comece a organizar suas anotações.',
            'keywords' => 'criar conta, cadastro, signup, rabisca'
        ],
        'login' => [
            'title' => 'Rabisca - Entrar',
            'description' => 'Acesse sua conta no Rabisca e continue suas anotações.',
            'keywords' => 'login, entrar, rabisca, conta'
        ],
        'about' => [
            'title' => 'Rabisca - Sobre',
            'description' => 'Saiba mais sobre o Rabisca e seu propósito como aplicativo de anotações simples.',
            'keywords' => 'sobre, rabisca, aplicativo de anotações, informações'
        ],
        'forgot-password' => [
            'title' => 'Rabisca - Recuperar Senha',
            'description' => 'Recupere sua senha do Rabisca de forma segura.',
            'keywords' => 'esqueci senha, recuperar senha, rabisca, conta'
        ],
        'dashboard' => [
            'title' => 'Rabisca - Painel',
            'description' => 'Visualize e gerencie todas as suas anotações em um só lugar.',
            'keywords' => 'painel, dashboard, anotações, rabisca, gerenciar'
        ],
        'notes' => [
            'title' => 'Rabisca - Anotações',
            'description' => 'Crie, edite e organize suas anotações facilmente.',
            'keywords' => 'anotações, notas, criar notas, editar, rabisca'
        ],
        'settings' => [
            'title' => 'Rabisca - Configurações',
            'description' => 'Personalize suas preferências e configurações da conta no Rabisca.',
            'keywords' => 'configurações, preferências, conta, rabisca'
        ],
    ];

    return $metadata[$page] ?? [
        'title' => 'Rabisca - Aplicativo de Anotações',
        'description' => 'Rabisca é um aplicativo simples e rápido para anotações, ajudando você a organizar suas ideias.',
        'keywords' => 'rabisca, anotações, aplicativo, organização, ideias'
    ];
}
