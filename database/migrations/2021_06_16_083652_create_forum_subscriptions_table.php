<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->constrained('users');
            $table->morphs('subscriptionable');
            $table->timestamps();
        });

        Schema::table('forum_subscriptions', function (Blueprint $table) {
            $table->index('subscriptionable_type');
            $table->index('subscriptionable_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
