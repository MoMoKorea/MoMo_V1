<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
                $table->bigIncrements('id')->comment('회원 고유 번호');
                $table->enum('status', [
                    'ACTIVE',
                    'INACTIVE',
                    'KEEP'
                ])->default('ACTIVE')->comment('회원 상태 ACTIVE : 활성, INACTIVE: 탈퇴, KEEP: 계정보관');
                $table->enum('type', [
                    'MOMO',
                    'SITTER',
                    'ADMIN'
                ])->default('MOMO')->comment('회원 종류 MOMO: 아이들어머니, SITTER: 베이비시터, ADMIN: 관리자');
                $table->string('email')->unique()->comment('메일계정');
                $table->string('password')->defalut('')->comment('비밀번호');
                $table->string('username')->defalut('')->comment('별명');
                $table->integer('fund')->default(0)->comment('예치금');
                $table->integer('withdrawn_profits')->default(0)->comment('현재 출금가능 수익금');
                $table->integer('profits')->default(0)->comment('총 수익금');
                $table->integer('pay')->default(0)->comment('희망급여');
                $table->text('work_days')->nullable()->comment('희망근무일 (JSON)');
                $table->text('work_region')->nullable()->comment('근무가능지역 (JSON)');
                $table->string('bank_code')->nullable()->comment('수익금 은행코드');
                $table->string('bank_account')->nullable()->comment('수익금 계좌번호');
                $table->text('reception')->nullable()->comment('이메일 수신여부,문자 수신여부,푸쉬 수신여부 (JSON)');
                $table->string('profile_picture')->nullable()->comment('프로필 사진');
                $table->string('realname')->nullable()->comment('실명');
                $table->string('rrn')->nullable()->comment('주민번호');
                $table->string('main_contact_number')->nullable()->comment('연락처 (인증용)');
                $table->string('sub_contact_number')->nullable()->comment('두번째 연락처');
                $table->string('addr')->nullable()->comment('주소1');
                $table->string('addr2')->nullable()->comment('주소2');
                $table->integer('age')->default(0)->comment('나이');
                $table->text('career')->nullable()->comment('경력');
                $table->text('description')->nullable()->comment('자기소개');
                $table->string('device')->nullable()->comment('사용기기');
                $table->string('cloud_message_id')->nullable()->comment('푸시 key');
                $table->string('social_account_type')->nullable()->comment('소셜 계정 타입');
                $table->string('social_account_id')->nullable()->comment('소셜 계정 ID');
                $table->string('mobile_conn_id')->nullable()->comment('소셜 계정 ID');
                $table->string('mobile_dupl_id')->nullable()->comment('소셜 계정 ID');
                $table->string('token')->default('')->comment('토큰 key');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
