<?php
// auth_ldap.php - created with Totara langimport script version 1.1

$string['auth_ldap_ad_create_req'] = 'Não foi possível criar uma nova conta no Active Directory. Certifique-se que todos os requerimentos foram verificados (conexão LDAPS, atribuições de privilégios aos usuários, etc.)';
$string['auth_ldap_attrcreators'] = 'Lista de grupos ou contextos cujos membros podem criar atributos. Separar mais de um grupo com \';\'. Geralmente algo como \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Atribuir criadores';
$string['auth_ldap_auth_user_create_key'] = 'Criar usuários externamente';
$string['auth_ldap_bind_dn'] = 'Para usar o bind-user para procurar usuários, especifique o parâmetro aqui. Algo como \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Nome Distinto';
$string['auth_ldap_bind_pw'] = 'Senha para o bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Senha';
$string['auth_ldap_bind_settings'] = 'Configurações bind';
$string['auth_ldap_changepasswordurl_key'] = 'Página de mudança de senha';
$string['auth_ldap_contexts'] = 'Lista dos contextos onde os usuários estão localizados. Separe contextos diferentes com \';\'. Por exemplo: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contextos';
$string['auth_ldap_create_context'] = 'Se você ativar a confirmação via correio eletrônico para a criação de usuário, indique o contexto em que os usuários são criados. Este contexto deve ser diverso de outros usuários para evitar problemas de segurança. Você não precisa adicionar este contexto ao ldap_context-variable, isto vai ser feito automaticamente.';
$string['auth_ldap_create_context_key'] = 'Contexto para novos usuários';
$string['auth_ldap_create_error'] = 'Erro ao criar usuário em LDAP';
$string['auth_ldap_creators'] = 'Lista dos grupos em que os membros tem permissão para criar novos cursos. Separe os grupos com \';\'. Por exemplo \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Criadores';
$string['auth_ldap_expiration_desc'] = 'Selecionar NO para desabilitar o controle de senhas expiradas ou LDAP para verificar a data de expiração da senha diretamente do LDAP';
$string['auth_ldap_expiration_key'] = 'Expiração';
$string['auth_ldap_expiration_warning_desc'] = 'Número de dias antes que o aviso de expiração da senha seja enviado';
$string['auth_ldap_expiration_warning_key'] = 'Aviso de expiração';
$string['auth_ldap_expireattr_desc'] = 'Opcional: ignora o atributo ldap que contém a data de expiração da senha asswordAxpirationTime';
$string['auth_ldap_expireattr_key'] = 'Atributo de expiração';
$string['auth_ldap_graceattr_desc'] = 'Opcional: Ignora atributo gracelogin';
$string['auth_ldap_gracelogin_key'] = 'Atributo do gracelogin';
$string['auth_ldap_gracelogins_desc'] = 'Ativa o suporte a LDAP gracelogin. Depois que a senha estiver expirada o usuário poderá fazer o login enquanto a contagem do gracelogin não for igual a 0. Uma mensagem será visualizada quando a senha expirar.';
$string['auth_ldap_gracelogins_key'] = 'Gracelogins';
$string['auth_ldap_groupecreators'] = 'Lista dos grupos em que os membros tem permissão para criar novos grupos. Separe os grupos com \';\'. Por exemplo \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Criadores de grupos';
$string['auth_ldap_host_url'] = 'Especifique o servidor LDAP usando o URL como \'ldap://ldap.myorg.com/\' ou \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_host_url_key'] = 'URL do host';
$string['auth_ldap_ldap_encoding'] = 'Especifique a codificação usada pelo servidor LDAP. É mais provável utf-8. MS AD v2 usa codificações padrões de plataforma como cp1252, cp1250, etc.';
$string['auth_ldap_ldap_encoding_key'] = 'Codificação LDAP';
$string['auth_ldap_login_settings'] = 'Configurações de login';
$string['auth_ldap_memberattribute'] = 'Especifique o atributo do usuário quando pertence a um grupo. Normalmente o atributo é \'membro\'';
$string['auth_ldap_memberattribute_isdn'] = 'Opcional: Sobrepõe o valor dos atributos dos membros, ou 0 ou 1.';
$string['auth_ldap_memberattribute_isdn_key'] = 'O atributo do membro usa dn';
$string['auth_ldap_memberattribute_key'] = 'Atributo de membro';
$string['auth_ldap_no_mbstring'] = 'Você precisa da extensão mbstring para criar usuários no Active Directory.';
$string['auth_ldap_noconnect'] = 'LDAP - O módulo não conseguiu se conectar no servidor: $a';
$string['auth_ldap_noconnect_all'] = 'LDAP - O módulo não conseguiu se conectar nos servidores: $a';
$string['auth_ldap_noextension'] = 'Aviso: O módulo LDAP do PHP não está presente. Certifique-se que ele foi instalado e ativado.';
$string['auth_ldap_objectclass'] = 'O filtro usado para a busca de nomes dos usuários. Normalmente é definido algo semelhante a objectClass=posixAccount . O padrão objectClass=* retorna todos os objetos do LDAP.';
$string['auth_ldap_objectclass_key'] = 'Classe do objeto';
$string['auth_ldap_opt_deref'] = 'Determina como os aliases são tratados durante a busca. Escolha um dos seguintes valores:
\"Não\" (LDAP_DEREF_NEVER) or \"Sim\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Atalhos de referenciamento';
$string['auth_ldap_passtype'] = 'Especifique o formato das senhas criadas e alteradas no servidor LDAP.';
$string['auth_ldap_passtype_key'] = 'Formato de senha';
$string['auth_ldap_passwdexpire_settings'] = 'Configurações de expiração da senha LDAP';
$string['auth_ldap_preventpassindb'] = 'Selecionar SIM para impedir que as senhas sejam arquivadas no DB do Moodle';
$string['auth_ldap_preventpassindb_key'] = 'Esconder senhas';
$string['auth_ldap_search_sub'] = 'Inserir valor <> 0 se quiser procurar usuários nos sub-contextos.';
$string['auth_ldap_search_sub_key'] = 'Procurar por subcontextos';
$string['auth_ldap_server_settings'] = 'Configurações do servidor LDAP';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() ainda não suporta o tipo de usuário selecionado: $a';
$string['auth_ldap_update_userinfo'] = 'Atualizar os dados dos usuários (nome, sobrenome, endereço...) a partir do LDAP. Para informação sobre o mapeamento consulte /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'O atributo usado para nomear/procurar usuários. Geralmente \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atributo de usuário';
$string['auth_ldap_user_exists'] = 'Nome do usuário LDAP já existe';
$string['auth_ldap_user_settings'] = 'Configurações de busca de usuário';
$string['auth_ldap_user_type'] = 'Seleciona o modo de memorizar os usuários em LDAP. Esta configuração define também as características de expiração do login, grace logins e criação de usuários';
$string['auth_ldap_user_type_key'] = 'Tipo de usuário';
$string['auth_ldap_usertypeundefined'] = 'config.user_type não foi definido ou a função ldap_expirationtime2unix não suporta o tipo escolhido!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type não foi definido ou a função ldap_unixi2expirationtime não suporta o tipo escolhido!';
$string['auth_ldap_version'] = 'A versão do protocolo LDAP que o seu servidor usa.';
$string['auth_ldap_version_key'] = 'Versão';
$string['auth_ldapdescription'] = 'Este método faz a autenticação em relação a um servidor LDAP externo. Se o nome do usuário e a senha forem válidos, o Moodle cria um novo registro de usuário na sua base de dados. Este módulo pode ler atributos do usuário a partir do LDAP e preencher os valores desejados no Moodle. Em entradas sucessivas serão verificados apenas o nome de usuário e a senha.';
$string['auth_ldapextrafields'] = 'Estes campos são opcionais. É possível optar por preencher campos de usuários com informação de <b>campos LDAP</b> especificados aqui.<br />Deixando estes campos em branco, serão usados valores predefinidos.<br />Nos dois casos, o usuário poderá editar todos estes campos quando tiver entrado no sistema.';
$string['auth_ldapnotinstalled'] = 'Não foi possível usar a autenticação LDAP. O módulo LDAP do PHP não foi instalado.';
$string['auth_ldaptitle'] = 'Use um servidor LDAP';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Marque sim para tentar uma inscrição única no domínio NTLM.
<strong>Nota:</strong> isso requer configurações adicionais no servidor web para que funcione. Veja <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Ativar';
$string['auth_ntlmsso_subnet'] = 'Se marcado, só haverá tentativas de SSO com clientes nessa sub-rede. Formato: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['ntlmsso_attempting'] = 'Tentando inscrição única via NTLM';
$string['ntlmsso_failed'] = 'O login automático falhou, tente pela página normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO está desativado.';

?>