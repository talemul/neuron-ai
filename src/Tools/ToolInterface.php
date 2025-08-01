<?php

declare(strict_types=1);

namespace NeuronAI\Tools;

interface ToolInterface extends \JsonSerializable
{
    /**
     * Get the unique name of the tool.
     */
    public function getName(): string;

    /**
     * Get a description of the tool's functionality.
     */
    public function getDescription(): ?string;

    /**
     * Add a Property with a name, type, description, and optional required constraint.
     */
    public function addProperty(ToolPropertyInterface $property): ToolInterface;

    /**
     * Get the Properties schema.
     */
    public function getProperties(): array;

    /**
     * Names of the required properties.
     *
     * @return array<string>
     */
    public function getRequiredProperties(): array;

    /**
     * Define the code to be executed.
     */
    public function setCallable(callable $callback): ToolInterface;

    /**
     * Get the input arguments of the function call.
     */
    public function getInputs(): array;

    /**
     * Get the input arguments of the function call.
     */
    public function setInputs(array $inputs): ToolInterface;

    /**
     * The call identifier generated by the LLM.
     * @return string
     */
    public function getCallId(): ?string;


    public function setCallId(string $callId): ToolInterface;


    public function getResult(): string;

    /**
     * Execute the tool's logic with input parameters.
     */
    public function execute(): void;
}
