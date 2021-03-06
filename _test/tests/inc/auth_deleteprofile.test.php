<?php

use dokuwiki\Input\Input;
use dokuwiki\test\mock\AuthDeletePlugin;

class auth_deleteprofile_test extends DokuWikiTest {

    /*
     * Tests:
     *
     * 1.   It works and the user is logged off
     * 2.   Password matches when config requires it
     * 3,4. Auth plugin can prevent & wiki config can prevent
     * 5.  Any of invalid security token, missing/not set 'delete' flag, missing/unchecked 'confirm_delete'
     *
     */

    function test_success() {

        global $ACT, $INPUT, $conf, $auth;

        $ACT = 'profile_delete';
        $conf['profileconfirm'] = false;
    	$_SERVER['REMOTE_USER'] = 'testuser';

        $input = array(
            'do'                 => $ACT,
            'sectok'             => getSecurityToken(),
            'delete'             => '1',
            'confirm_delete'     => '1',
        );

        $_POST = $input;
        $_REQUEST = $input;
        $INPUT = new Input();

        $auth = new AuthDeletePlugin();

        $this->assertTrue(auth_deleteprofile());
        $this->assertTrue($auth->loggedOff);
    }

    function test_confirmation_required() {

        global $ACT, $INPUT, $conf, $auth;

        $ACT = 'profile_delete';
        $conf['profileconfirm'] = true;
    	$_SERVER['REMOTE_USER'] = 'testuser';

        $input = array(
            'do'                 => $ACT,
            'sectok'             => getSecurityToken(),
            'delete'             => '1',
            'confirm_delete'     => '1',
            'oldpass'            => 'wrong',
        );

        $_POST = $input;
        $_REQUEST = $input;
        $INPUT = new Input();

        $auth = new AuthDeletePlugin();

        // password check required - it fails, so don't delete profile
        $this->assertFalse(auth_deleteprofile());

        // now it passes, we're good to go
        $INPUT->set('oldpass','password');
        $INPUT->post->set('oldpass','password');
        $this->assertTrue(auth_deleteprofile());
    }

    function test_authconfig_prevents() {

        global $ACT, $INPUT, $conf, $auth;

        $ACT = 'profile_delete';
        $conf['profileconfirm'] = false;
    	$_SERVER['REMOTE_USER'] = 'testuser';

        $input = array(
            'do'                 => $ACT,
            'sectok'             => getSecurityToken(),
            'delete'             => '1',
            'confirm_delete'     => '1',
        );

        $_POST = $input;
        $_REQUEST = $input;
        $INPUT = new Input();

        $auth = new AuthDeletePlugin(false);
        $conf['disableactions'] = '';
        $this->assertFalse(auth_deleteprofile());
    }

    function test_wikiconfig_prevents() {

        global $ACT, $INPUT, $conf, $auth;

        $ACT = 'profile_delete';
        $conf['profileconfirm'] = false;
    	$_SERVER['REMOTE_USER'] = 'testuser';

        $input = array(
            'do'                 => $ACT,
            'sectok'             => getSecurityToken(),
            'delete'             => '1',
            'confirm_delete'     => '1',
        );

        $_POST = $input;
        $_REQUEST = $input;
        $INPUT = new Input();

        $auth = new AuthDeletePlugin();
        $conf['disableactions'] = 'profile_delete';

        $this->assertFalse(actionOK('profile_delete'));
        $this->assertTrue($auth->canDo('delUser'));

        $this->assertFalse(auth_deleteprofile());
    }

    function test_basic_parameters() {

        global $ACT, $INPUT, $conf, $auth;

        $ACT = 'profile_delete';
        $conf['profileconfirm'] = true;
    	$_SERVER['REMOTE_USER'] = 'testuser';

        $input = array(
            'do'                 => $ACT,
            'sectok'             => getSecurityToken(),
            'delete'             => '1',
            'confirm_delete'     => '1',
            'oldpass'            => 'password',
        );

        $_POST = $input;
        $_REQUEST = $input;
        $input_foundation = new Input();

        $auth = new AuthDeletePlugin();

        $INPUT = clone $input_foundation;
        $INPUT->remove('delete');
        $this->assertFalse(auth_deleteprofile());

        $INPUT = clone $input_foundation;
        $INPUT->set('sectok','wrong');
        $this->assertFalse(auth_deleteprofile());

        $INPUT = clone $input_foundation;
        $INPUT->remove('confirm_delete');
        $this->assertFalse(auth_deleteprofile());
    }
}
