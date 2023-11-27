<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace qbank_genai\task;

defined('MOODLE_INTERNAL') || die();

/**
 * Class generation_task
 *
 * @package    qbank_genai
 * @copyright  2023 Christian Grévisse <christian.grevisse@uni.lu>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class generation_task extends \core\task\adhoc_task {

    public static function instance(
        int $id,
        string $status,
        int $userid,
    ): self {
        $task = new self();
        $task->set_custom_data((object) [
            'id' => $id,
            'status' => $status,
        ]);
        global $USER;
        $task->set_userid($userid);

        return $task;
    }

    public function execute() {
        $data = $this->get_custom_data();
        mtrace($data->id);
        sleep(20);
        mtrace($data->status);
    }
}
