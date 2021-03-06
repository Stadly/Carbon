<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Localization;

class SrCyrlMeTest extends LocalizationTestCase
{
    const LOCALE = 'sr_Cyrl_ME'; // Serbian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'сутра у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'у суботу у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'у недељу у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'у понедељак у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'у уторак у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'у среду у 0:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'у четвртак у 0:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'у петак у 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'у уторак у 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'у среду у 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'у четвртак у 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'у петак у 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'у суботу у 0:00',
        // Carbon::now()->subDays(2)->calendar()
        'прошле недеље у 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'јуче у 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'данас у 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'данас у 2:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'сутра у 1:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'у уторак у 0:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'јуче у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'јуче у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'прошлог уторка у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'прошлог понедељка у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'прошле недеље у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'прошле суботе у 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'прошлог петка у 0:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'прошлог четвртка у 0:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'прошле среде у 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'прошлог петка у 0:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1. 1. 1. 1. 1.',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2. 1.',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3. 1.',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4. 1.',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5. 1.',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6. 1.',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7. 1.',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11. 2.',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40.',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41.',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100.',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 am cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 PM, 9:30 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0.',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'прије 1 секунд',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'прије 1 сек.',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'прије 2 секунде',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'прије 2 сек.',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'прије 1 минут',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'прије 1 мин.',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'прије 2 минута',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'прије 2 мин.',
        // Carbon::now()->subHours(1)->diffForHumans()
        'прије 1 сат',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'прије 1 ч.',
        // Carbon::now()->subHours(2)->diffForHumans()
        'прије 2 сата',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'прије 2 ч.',
        // Carbon::now()->subDays(1)->diffForHumans()
        'прије 1 дан',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'прије 1 д.',
        // Carbon::now()->subDays(2)->diffForHumans()
        'прије 2 дана',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'прије 2 д.',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'прије 1 недјељу',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'прије 1 нед.',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'прије 2 недјеље',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'прије 2 нед.',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'прије 1 мјесец',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'прије 1 мј.',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'прије 2 мјесеца',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'прије 2 мј.',
        // Carbon::now()->subYears(1)->diffForHumans()
        'прије 1 годину',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'прије 1 г.',
        // Carbon::now()->subYears(2)->diffForHumans()
        'прије 2 године',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'прије 2 г.',
        // Carbon::now()->addSecond()->diffForHumans()
        'за 1 секунд',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'за 1 сек.',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        '1 секунд након',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 сек. након',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 секунд прије',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 сек. прије',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 секунд',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 сек.',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 секунде',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 сек.',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'за 1 сек.',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 минут 1 секунд',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 г. 3 мј. 1 д. 1 сек.',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'за 3 године',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'прије 5 мј.',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'прије 2 г. 3 мј. 1 д. 1 сек.',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 недјеља 10 сати',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 недјеља 6 дана',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 недјеља 6 дана',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 недјеље 1 сат',
        // CarbonInterval::days(2)->forHumans()
        '2 дана',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 д. 3 ч.',
    ];
}
