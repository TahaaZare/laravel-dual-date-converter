<?php

namespace TahaaZare\DualDateConverter;

use Morilog\Jalali\Jalalian;
use Morilog\Jalali\CalendarUtils;
use Carbon\Carbon;
use Exception;

class DualDateHelper
{
    public static function toGregorian(string $date): string
    {
        $clean = str_replace(['/', '-', '.', ' '], '', $date);

        if (!preg_match('/^\d{8}$/', $clean)) {
            throw new Exception("تاریخ شمسی نامعتبر است.");
        }

        $y = substr($clean, 0, 4);
        $m = substr($clean, 4, 2);
        $d = substr($clean, 6, 2);

        $jalali = Jalalian::fromFormat('Y-m-d', "$y-$m-$d");
        return $jalali->toCarbon()->format('Y-m-d');
    }

    public static function toJalali(string $date): string
    {
        try {
            $carbon = Carbon::parse($date);
            $jalali = Jalalian::fromCarbon($carbon);
            return $jalali->format('Y-m-d');
        } catch (Exception $e) {
            throw new Exception("تاریخ میلادی نامعتبر است.");
        }
    }
}
