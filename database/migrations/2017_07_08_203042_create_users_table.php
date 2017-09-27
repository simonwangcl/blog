<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Model\UserModel;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',31)->comment('用户名');
                $table->string('email',31)->comment('邮箱');
                $table->char('phone',11)->comment('手机号码');
                $table->char('image', 44)->comment('头像路径');
                $table->char('salt',32)->comment('盐值');
                $table->char('password',32)->comment('密码');
                $table->integer('role_id')->default(0)->comment('角色ID');
                $table->timestamps();
                $table->index('name');
                $table->index('email');
                $table->index('phone');
                $table->index('role_id');
            });
            $user = new UserModel();
		        $user->name = 'simon';
		        $user->email = '249348306@qq.com';
		        $user->phone = '18868803191';
		        $user->image = '/storage/avatars/20170815020135whX83Q.jpg';
		        $user->role_id = 1;
		        $user->salt = str_random(32);
		        $user->password = md5( $user->salt.'123456');
		        $user->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::dropIfExists('users');
        }
    }
}
