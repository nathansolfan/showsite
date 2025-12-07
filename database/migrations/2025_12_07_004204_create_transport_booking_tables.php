<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
                            //SERVICES TABLE
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string( 'name');
            $table->text(   'description');
            $table->string( 'icon')->nullable();
            $table->decimal('base_price', 10,2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

                             //BOOKINGS
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId(   'user_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');

            //pickup info
            $table->string('pickup_address');
            $table->string('pickup_postcode');
            $table->date(  'pickup_date');

            //delivery info
            $table->text(   'item_description');
            $table->string( 'item_size'   )->nullable();
            $table->integer('helper_count')->default(0)->nullable();

            //pricing
            $table->decimal('estimated_price', 10, 2)->nullable();
            $table->decimal('final_price',     10, 2)->nullable();

            //status
            $table->enum('status', [
                'pending',
                'quoted',
                'accepted',
                'in_progress',
                'completed',
                'cancelled'
            ])->default('pending');

            $table->text('notes')->nullable();
            $table->timestamps();
        });


                            //QUOTES
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId( 'booking_id' )->constrained()->onDelete('cascade');
            $table->foreignId( 'provider_id')->constrained('users')->onDelete('cascade');

            $table->decimal('quoted_price', 10, 2);
            $table->text(   'message')->nullable();
            $table->enum(   'status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
        });

                             //REVIEWS
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id'   )->constrained()->onDelete('cascade');
            $table->integer('rating');
            $table->text('comment')->nullable();
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('quotes');
        Schema::dropIfExists('reviews');

    }
};
