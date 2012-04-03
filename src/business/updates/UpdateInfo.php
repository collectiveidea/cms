<?php
namespace Blocks;

/**
 *
 */
class UpdateInfo
{
	public $blocks;
	public $plugins = array();

	/**
	 * @param array $properties
	 */
	function __construct($properties = array())
	{
		if (isset($properties['blocks']))
			$this->blocks = new BlocksUpdateInfo($properties['blocks']);
		else
			$this->blocks = new BlocksUpdateInfo;

		if (isset($properties['plugins']))
			foreach ($properties['plugins'] as $pluginData)
				$this->plugins[$pluginData['handle']] = new PluginUpdateInfo($pluginData);
	}
}
